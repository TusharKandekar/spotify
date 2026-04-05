<!DOCTYPE html>
<html lang="en">

<?php
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
                <span class="text-xl font-semibold text-gray-800 w-[85%] text-start">Add Artist</span>
                <!-- <a href="/admin/add-collections" class="bg-gray-800 text-sm font-semibold py-2 px-4 rounded-lg text-white">Add Collection</a> -->
            </div>
            <div class="w-full flex items-center justify-center pb-4 ">

                <form action="/admin/add-artist" method="POST" class="w-[85%] max-md:w-full" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full pb-10">
                        <div class="lg:col-span-2 flex flex-col gap-6">

                            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                                <div class="w-full">
                                    <label class="block text-sm font-medium text-gray-700 mb-1" for="artist-name">Artist Name</label>
                                    <input
                                        class="w-full border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1" value="<?= isset($Artist['name']) ? $Artist['name'] : '' ?>" name="name"
                                        id="artist-name" type="text" />
                                </div>

                                <label class="block text-sm font-medium text-gray-700 mb-1 mt-3" for="artist-name">About Artist</label>

                                <textarea name="about" class="w-full border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1" id=""></textarea>

                                <label class="profile mt-3 mb-1">Profile Image</label>
                                <input type="file" name="profile" class="border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1 w-full">
                                <label class="profile mt-3 mb-1">Cover Image</label>
                                <input type="file" name="cover" class="border-[1px] border-gray-600 rounded-xl focus:ring-indigo-500 focus:border-indigo-500 px-3 py-1 w-full">
                            </div>
                        </div>


                    </div>
                    <div class="w-[85%]">
                        <button class="bg-black border border-transparent rounded-md py-2 px-4 text-sm font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" name="<?= isset($Artist['id']) ? 'update' : 'add' ?>">Save</button>
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