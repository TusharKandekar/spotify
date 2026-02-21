<!DOCTYPE html>
<html lang="en">
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/views/website/include/header.php";
?>

<body>
    <!-- <?php
            include $_SERVER['DOCUMENT_ROOT'] . "/views/website/include/navbar.php";
            ?> -->
    <div class="flex h-[87vh]  overflow-hidden">
        <!-- Sidebar -->
        <div class="w-1/4 bg-[#121212] border-r border-gray-700">
            <!-- Sidebar Header -->
            <header class="p-4 border-b border-gray-700 flex justify-between items-center bg-[#121212] text-white">
                <h1 class="text-lg font-semibold">Chat Web</h1>
                <div class="relative">
                    <button id="menuButton" class="focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100 text-sm" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path d="M2 10a2 2 0 012-2h12a2 2 0 012 2 2 2 0 01-2 2H4a2 2 0 01-2-2z" />
                        </svg>
                    </button>
                    <!-- Menu Dropdown -->
                    <div id="menuDropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden">
                        <ul class="py-2 px-3">
                            <li><a href="#" class="block px-4 py-2 text-gray-800 hover:text-gray-400">Option 1</a></li>
                            <li><a href="#" class="block px-4 py-2 text-gray-800 hover:text-gray-400">Option 2</a></li>
                            <!-- Add more menu options here -->
                        </ul>
                    </div>
                </div>
            </header>

            <!-- Contact List -->
            <div class="overflow-y-auto h-full p-1 mb-9 pb-20 custom-scroll bg-[#1f1f1f] text-white">
                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Alice</h2>
                        <p class="text-gray-100 text-sm">Hoorayy!!</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/ad922e/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Martin</h2>
                        <p class="text-gray-100 text-sm">That pizza place was amazing!</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/2e83ad/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Charlie</h2>
                        <p class="text-gray-100 text-sm">Hey, do you have any recommendations for a</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/c2ebff/0f0b14.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">David</h2>
                        <p class="text-gray-100 text-sm">I just finished reading a great book! It was so captivating.</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/e7c2ff/7315d1.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Ella</h2>
                        <p class="text-gray-100 text-sm">What's the plan for this weekend? Anything fun?</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/ffc2e2/ffdbdb.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Fiona</h2>
                        <p class="text-gray-100 text-sm">I heard there's a new exhibit at the art museum. Interested?</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/f83f3f/4f4f4f.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">George</h2>
                        <p class="text-gray-100 text-sm">I tried that new cafe downtown. The coffee was fantastic!</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/dddddd/999999.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Hannah</h2>
                        <p class="text-gray-100 text-sm">I'm planning a hiking trip next month. Want to join?</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/70ff33/501616.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Ian</h2>
                        <p class="text-gray-100 text-sm">Let's catch up soon. It's been too long!</p>
                    </div>
                </div>

                <div class="flex items-center mb-4 cursor-pointer hover:bg-black p-2 rounded-md">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/30916c/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="flex-1">
                        <h2 class=" font-semibold">Jack</h2>
                        <p class="text-gray-100 text-sm text-sm">Remember that hilarious joke you told me? I can't stop laughing!</p>
                    </div>
                </div>


            </div>
        </div>

        <!-- Main Chat Area -->
        <div class="w-3/4 bg-[#1f1f1f] relative">
            <!-- Chat Header -->
            <header class="bg-[#121212] p-4 text-white flex items-center justify-between gap-1">
                <div class="flex items-center justify-center">

                    <div class="w-6 h-6 bg-gray-300 rounded-full mr-3">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-6 h-6 rounded-full">
                    </div>
                    <h1 class="text-lg font-semibold">Alice</h1>
                </div>
                <a href="/" class=" rounded-full">
                    <img class="w-[1.7vw]" src="/public/icons/home-icon.png" alt="">
                </a>
            </header>

            <!-- Chat Messages -->
            <div class="h-full overflow-y-auto p-4 pb-36 custom-scroll">
                <!-- Incoming Message -->
                <div class="flex mb-4 cursor-pointer">
                    <div class="w-6 h-6 rounded-full flex items-center justify-center mr-2">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-6 h-6 rounded-full">
                    </div>
                    <div class="flex max-w-96 bg-white text-white rounded-lg px-3 py-1 gap-3 items-center text-sm">
                        <span class="text-gray-700 text-sm ">Hey Bob, how's it going?</span>
                    </div>
                </div>

                <!-- Outgoing Message -->
                <div class="flex justify-end mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-black text-white rounded-lg px-3 py-1 gap-3 items-center text-sm">
                        <p>Hi Alice! I'm good, just finished a great book. How about you?</p>
                    </div>
                    <div class="w-6 h-6 rounded-full flex items-center justify-center ml-2">
                        <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-6 h-6 rounded-full">
                    </div>
                </div>

                <!-- Incoming Message -->
                <div class="flex mb-4 cursor-pointer">
                    <div class="w-6 h-6 rounded-full flex items-center justify-center mr-2">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-6 h-6 rounded-full">
                    </div>
                    <div class="flex max-w-96 bg-white text-white rounded-lg px-3 py-1 gap-3 items-center text-sm px-3 py-1 items-center text-sm">
                        <p class="text-gray-700">That book sounds interesting! What's it about?</p>
                    </div>
                </div>

                <!-- Outgoing Message -->
                <div class="flex justify-end mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-black text-white rounded-lg px-3 py-1 gap-3 items-center text-sm">
                        <p>It's about an astronaut stranded on Mars, trying to survive. Gripping stuff!</p>
                    </div>
                    <div class="w-6 h-6 rounded-full flex items-center justify-center ml-2">
                        <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-6 h-6 rounded-full">
                    </div>
                </div>

                <!-- Incoming Message -->
                <div class="flex mb-4 cursor-pointer">
                    <div class="w-6 h-6 rounded-full flex items-center justify-center mr-2">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-6 h-6 rounded-full">
                    </div>
                    <div class="flex max-w-96 bg-white text-white rounded-lg px-3 py-1 gap-3 items-center text-sm px-3 py-1 items-center text-sm">
                        <p class="text-gray-700">I'm intrigued! Maybe I'll borrow it from you when you're done?</p>
                    </div>
                </div>

                <!-- Outgoing Message -->
                <div class="flex justify-end mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-black text-white rounded-lg px-3 py-1 gap-3 items-center text-sm">
                        <p>Of course! I'll drop it off at your place tomorrow.</p>
                    </div>
                    <div class="w-6 h-6 rounded-full flex items-center justify-center ml-2">
                        <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-6 h-6 rounded-full">
                    </div>
                </div>

                <!-- Incoming Message -->
                <div class="flex mb-4 cursor-pointer">
                    <div class="w-6 h-6 rounded-full flex items-center justify-center mr-2">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-6 h-6 rounded-full">
                    </div>
                    <div class="flex max-w-96 bg-white text-white rounded-lg px-3 py-1 gap-3 items-center text-sm px-3 py-1 items-center text-sm">
                        <p class="text-gray-700">Thanks, you're the best!</p>
                    </div>
                </div>

                <!-- Outgoing Message -->
                <div class="flex justify-end mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-black text-white rounded-lg px-3 py-1 gap-3 items-center text-sm">
                        <p>Anytime! Let me know how you like it. 😊</p>
                    </div>
                    <div class="w-6 h-6 rounded-full flex items-center justify-center ml-2">
                        <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-6 h-6 rounded-full">
                    </div>
                </div>

                <!-- Incoming Message -->
                <div class="flex mb-4 cursor-pointer">
                    <div class="w-6 h-6 rounded-full flex items-center justify-center mr-2">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-6 h-6 rounded-full">
                    </div>
                    <div class="flex max-w-96 bg-white text-white rounded-lg px-3 py-1 gap-3 items-center text-sm px-3 py-1 items-center text-sm">
                        <p class="text-gray-700">So, pizza next week, right?</p>
                    </div>
                </div>

                <!-- Outgoing Message -->
                <div class="flex justify-end mb-4 cursor-pointer">
                    <div class="flex max-w-96 bg-black text-white rounded-lg px-3 py-1 gap-3 items-center text-sm">
                        <p>Absolutely! Can't wait for our pizza date. 🍕</p>
                    </div>
                    <div class="w-6 h-6 rounded-full flex items-center justify-center ml-2">
                        <img src="https://placehold.co/200x/b7a8ff/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="My Avatar" class="w-6 h-6 rounded-full">
                    </div>
                </div>
                <!-- Incoming Message -->
                <div class="flex mb-4 cursor-pointer">
                    <div class="w-6 h-6 rounded-full flex items-center justify-center mr-2">
                        <img src="https://placehold.co/200x/ffa8e4/ffffff.svg?text=ʕ•́ᴥ•̀ʔ&font=Lato" alt="User Avatar" class="w-6 h-6 rounded-full">
                    </div>
                    <div class="flex max-w-96 bg-white text-white rounded-lg px-3 py-1 gap-3 items-center text-sm px-3 py-1 items-center text-sm">
                        <p class="text-gray-700">Hoorayy!!</p>
                    </div>
                </div>

            </div>

            <!-- Chat Input -->
            <div class="bg-[#121212]  px-4 py-1 absolute bottom-0 w-full">
                <div class="flex items-center">
                    <input type="text" placeholder="Type a message..." class="w-full bg-[#1f1f1f] p-2 rounded-md text-white border border-gray-700 focus:outline-none focus:border-white">
                    <button class="bg-gray-100 px-4 py-2 rounded-md ml-2">Send</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript for showing/hiding the menu
        const menuButton = document.getElementById('menuButton');
        const menuDropdown = document.getElementById('menuDropdown');

        menuButton.addEventListener('click', () => {
            if (menuDropdown.classList.contains('hidden')) {
                menuDropdown.classList.remove('hidden');
            } else {
                menuDropdown.classList.add('hidden');
            }
        });

        // Close the menu if you click outside of it
        document.addEventListener('click', (e) => {
            if (!menuDropdown.contains(e.target) && !menuButton.contains(e.target)) {
                menuDropdown.classList.add('hidden');
            }
        });
    </script>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/website/include/play.php";
    ?>
    </div>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/views/website/include/footer.php";
    ?>
</body>

</html>