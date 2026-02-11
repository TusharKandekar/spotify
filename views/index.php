<!DOCTYPE html>
<html lang="en">

<?php
$markets = getData('market');
include $_SERVER['DOCUMENT_ROOT'] . "/views/include/header.php";

?>

<body class="bg-[#1a1a1a] overflow-hidden">

    <div class="flex">
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/views/include/sidebar.php";

        $date = date('Y-m-d');

        ?>

        <main class="flex-1 md:ml-[16.5rem] mt-[3.7rem] bg-[#f1f1f1] md:rounded-tr-3xl  h-[92vh] overflow-y-scroll">
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . "/views/include/navbar.php";
            ?>
            <div class="w-full flex items-center justify-center p-3">
                <span class="text-xl font-semibold text-gray-800 w-[85%] text-start">Add Result</span>
                <!-- <a href="/admin/add-collections" class="bg-gray-800 text-sm font-semibold py-2 px-4 rounded-lg text-white">Add Collection</a> -->
            </div>
            <div class="w-full flex items-center justify-center pb-4 ">

                <form action="/admin/add-result" method="POST" class="w-[85%] max-md:w-full" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full pb-10">
                        <div class="lg:col-span-2 flex flex-col gap-6">

                            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">

                                <div class="w-full flex items-center justify-center gap-6">
                                    <div class="w-full">
                                        <label class="block text-sm font-medium text-gray-700 mb-1" for="title">Date</label>
                                        <input
                                            class="w-full border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1" value="<?= isset($result['date']) ? $result['date'] : date('Y-m-d') ?>" name="date"
                                            id="title" type="date" />
                                    </div>
                                    <div class="w-full">
                                        <label class="block text-sm font-medium text-gray-700  mb-1"
                                            for="description">Select Market</label>
                                        <div class="border border-gray-300 rounded-md">
                                            <?php
                                            if ($_SESSION['role'] == '2') {
                                                $userid = $_SESSION['id'];
                                                $assignmarket = getData2("SELECT * FROM market_asign WHERE userid = '$userid'");
                                                $allowedMarkets = array_column($assignmarket, 'market');
                                            }
                                            // printWithPre($allowedMarkets);;
                                            ?>
                                            <select name="name" class="w-full border-[1px] border-gray-600" id="marketselect">
                                                <option value="" disabled selected>Select Market</option>
                                                <?php
                                                foreach ($markets as $key => $market) {
                                                    $open = $market['open'];
                                                    $close = $market['close'];
                                                    if (isset($allowedMarkets)) {
                                                        if (!in_array($market['id'], $allowedMarkets)) {
                                                            continue;
                                                        }
                                                    }
                                                ?>
                                                    <option value="<?= $market['id'] ?>" <?= isset($result['name']) && $result['name'] == $market['id'] ? 'selected' : '' ?>><?= $market['name'] ?> - <?= date("h:i A", strtotime($open)); ?> - <?= date("h:i A", strtotime($close)); ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="w-full flex items-center justify-center gap-6 mt-2">
                                    <div class="w-full">
                                        <label class="block text-sm font-medium text-gray-700 mb-1" for="title">Open</label>
                                        <input
                                            class="w-full border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1" value="<?= isset($result['open']) ? $result['open'] : '' ?>" name="open"
                                            id="open" type="text" />
                                    </div>
                                    <div class="w-full">
                                        <label class="block text-sm font-medium text-gray-700 mb-1" for="title">Jodi</label>
                                        <input
                                            class="w-full border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1" value="<?= isset($result['jodi']) ? $result['jodi'] : '' ?>" name="jodi"
                                            id="jodi" type="text" />
                                    </div>
                                    <div class="w-full">
                                        <label class="block text-sm font-medium text-gray-700 mb-1" for="title">Close</label>
                                        <input
                                            class="w-full border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1" value="<?= isset($result['close']) ? $result['close'] : '' ?>" name="close"
                                            id="close" type="text" />
                                    </div>

                                </div>
                                <!-- <div class="flex items-center juustify-center gap-2 mt-2">
                                    <input type="checkbox" <?= isset($result['redtext']) && $result['redtext'] == 'on' ? 'checked' : ''  ?> name="redtext">
                                    <span>Red text</span>
                                </div> -->
                                <!-- <span class="text-xs text-red-500">the result will apear in red colour</span> -->
                            </div>
                        </div>


                    </div>
                    <div class="w-[85%]">
                        <button class="bg-black border border-transparent rounded-md py-2 px-4 text-sm font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="<?= isset($result['id']) ? 'update' : 'add' ?>">Save</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/include/footer.php";
    ?>
    <script>
        document.getElementById('marketselect').addEventListener('change', async function() {

            const marketId = this.value;

            try {
                const response = await axios.post('/admin/add-result', new URLSearchParams({
                    market_id: marketId
                }));

                console.log(response.data);

                if (response.data.success) {
                    // do something
                    // console.log("Data loaded successfully");
                    document.getElementById('open').value = response.data.data.open
                    document.getElementById('jodi').value = response.data.data.jodi
                    document.getElementById('close').value = response.data.data.close



                }

            } catch (error) {
                console.error(error);
            }

        });
    </script>
</body>

</html>