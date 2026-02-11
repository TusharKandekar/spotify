<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/LoginController.php";

class WebController extends LoginController
{
    private $db;
    public function __construct($db = null)
    {
        if ($db != null) {
            $this->db = $db;
        } else {
            $this->db = getDBObject()->getConnection();
        }
        parent::__construct($this->db);
    }
        public function Privacy(){

         $siteName = getDBObject()->getSiteName();
        $pageTitle = "Privacy Policy";
         if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require 'views/website/privacy-policy.php';
        }
    }

    public function UserRegister()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Register";
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require 'views/website/user-register.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {


            unset($_POST['password_confirmation']);
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['password'] = $password;
            $user = getData2(
                "SELECT * FROM users 
                WHERE mobile = '" . $_POST['mobile'] . "'"
            );

            if (!empty($user)) {

                $_SESSION['err'] = "Email alredy registered";
                redirect('/user-register');
            } else {
                // printWithPre($_POST);
                // die();
                $add = add($_POST, 'users', false);
                if ($add) {
                    $_SESSION['mobile'] = $_POST['mobile'];
                    $_SESSION['name'] = $_POST['name'];
                    $_SESSION['userid'] = $add;

                    header("location: /user-guissing");
                    exit();
                } else {

                    $_SESSION['err'] = "Something went wrong";
                    header("location: /user-register");
                    exit();
                }

                // redirect('/user-guissing');
            }
        }
    }
        public function saveToken()
    {
        $response = [
            "success" => false,
            "message" => "Something went wrong"
        ];

        try {
            $this->db->beginTransaction();

            $_POST = json_decode(file_get_contents('php://input'), true);

            $token = $_POST['token'];
            $userid = $_POST['userid'];

            if (!empty($token)) {

                $isExistToken = getData2("SELECT * FROM `tbl_tokens` WHERE `token` = '$token'");

                if (empty($isExistToken)) {
                    add([
                        "token" => $token,
                        "userid" => $userid,
                        "created_date" => date("Y-m-d"),
                        "created_time" => date("H:i:s"),
                        "created_at" => date("Y-m-d H:i:s")
                    ], "tbl_tokens", false);
                } else if (empty($isExistToken[0]['userid']) && !empty($userid)) {
                    update([
                        "userid" => $userid
                    ], $isExistToken[0]['id'], "tbl_tokens");
                }
            }

            // printWithPre($_POST);
            // die();

            $response = [
                "success" => true,
                "message" => "Token Saved Successfully"
            ];

            $this->db->commit();
        } catch (Exception $e) {
            $this->db->rollBack();
            $response = [
                "success" => false,
                "message" => $e->getMessage()
            ];
        } finally {
            echo json_encode($response);
        }
    }
    public function UserLogin()
    {
        $siteName = getDBObject()->getSiteName();
        $pageTitle = "Login";
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require 'views/website/user-login.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // printWithPre($_POST);
            // die();

            $email = $_POST['mobile'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE mobile = :userid";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':userid', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!empty($user)) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['userid'] = $user['id'];

                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['mobile'] = $user['mobile'];
                    $_SESSION['success'] = "Login successfully";
                    redirect('/user-guissing');
                } else {
                    $_SESSION['err'] = "Password not matched";
                    redirect('/user-login');
                }
            } else {
                $_SESSION['err'] = "Email Or Password not matched";
                redirect('/user-login');
            }
        }
    }
    public function UserGuissing()
    {
        $siteName = getDBObject()->getSiteName();
        $pageModule = "User Guissing";
        $pageTitle = "User Guissing";

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            require 'views/website/user-guissing.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $date = date('Y-m-d');
            $id = $_SESSION['userid'];
            $_POST['userid'] = $id;
            $_POST['created_by'] = $id;
            $data = getData2("SELECT * FROM user_guissing WHERE userid = '$id' AND created_date = '$date'");
            // printWithPre($data);
            // die();
            if (count($data) <= 10) {
                add($_POST, 'user_guissing');
                $_SESSION['success'] = "Your Guss has been placed";
                header('location:/user-guissing');
                exit();
            } else {
                $_SESSION['err'] = "You reach the daily limit";
                header('location:/ user-guissing');
                exit();
            }
        }
    }
    public function index()
    {

        $siteName = getDBObject()->getSiteName();
        $pageModule = "Home Page";
        $pageTitle = "Home Page";
        $markets = getData2("SELECT * FROM market WHERE status = '1' ORDER BY position ASC");
        $starlines = getData("starline");

        // printWithPre($starlines);
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $golden = getData2("SELECT * FROM goldenank ORDER BY id DESC")[0];

            require 'views/website/index.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['popup'])) {
                $_SESSION['popup'] = $_POST['popup'];
                // echo "nice";
            }
            // printWithPre($_SESSION);
            // if (!isset($_SESSION['userid']) && $_SESSION['type'] != "User") {
            //     if (!isset($_SESSION['popup'])) {
            //         $_SESSION['popup'] = 'false';
            //     }
            // }
            require 'views/website/index.php';
        }
    }

    public function Panel($market = null)
    {

        $siteName = getDBObject()->getSiteName();
        $pageModule = "Panel Page";
        $pageTitle = "Panel Page";
        $markets = getData("market");

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $result = getData2("SELECT * FROM `market` WHERE url = '$market'")[0];
            $fetchid = getData2("SELECT * FROM market WHERE url='$market'")[0];

            require 'views/website/panel.php';
        }
    }
    public function Jodi($market = null)
    {

        $siteName = getDBObject()->getSiteName();
        $pageModule = "Jodi Page";
        $pageTitle = "Jodi Page";
        $markets = getData("market");

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $result = getData2("SELECT * FROM `market` WHERE url = '$market'")[0];
            $fetchid = getData2("SELECT * FROM market WHERE url='$market'")[0];

            require 'views/website/jodi.php';
        }
    }
    public function StarLineChart($starline = null)
    {

        $siteName = getDBObject()->getSiteName();
        $pageModule = "Satrline Chart Page";
        $pageTitle = "Satrline Chart Page";
        $starname = str_replace('-', ' ', $starline);
        // echo $starname;
        // die();
        $starlineData = getData2("SELECT * FROM starline WHERE LOWER(name) = LOWER('$starname')")[0];
        // printWithPre($starlineData);
        $sralineId = $starlineData['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $bazis = getData2("SELECT * FROM bazi WHERE starline = '$sralineId' ORDER BY id ASC");
            $result = getData2("SELECT starline_result.*, bazi.name as bazi_name FROM `starline_result` LEFT JOIN bazi ON starline_result.bazi = bazi.id WHERE starline_result.starline = '$sralineId'");
            // $fetchid = getData2("SELECT * FROM starline WHERE name='$starline'")[0];
            // printWithPre($bazis);

            require 'views/website/starline.php';
        }
    }
}
