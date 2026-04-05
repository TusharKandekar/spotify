<?php

class ArtistController
{
    private $db;
    public function __construct($db = null)
    {
        $this->db = $db;
    }

    public function Artist($id = null)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            require 'views/artist/artist.php';
        } else {

        printWithPre($_POST);
            if (isset($_POST['add'])) {

                unset($_POST['add']);
                $_POST['cover'] = uploadFile($_FILES['cover'], "public/artist-banner/");
                $_POST['profile'] = uploadFile($_FILES['profile'], "public/artist-profile/");

                $artist = add($_POST, "artist");
                if ($artist) {
                    $_SESSION['success'] = "Artist Added Successfully";
                    header('Location:/admin/add-artist');
                    exit();
                } else {
                    $_SESSION['err'] = "Failed to add Artist";
                    header('Location:/admin/add-artist');
                    exit();
                }
            }
        }
    }
}
