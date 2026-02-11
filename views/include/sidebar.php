<?php
if($_SESSION['role'] == '1'){
?>
<aside class="w-[16.5rem] bg-[#ebebeb] text-gray-300 flex flex-col fixed h-full z-10  md:flex rounded-tl-3xl mt-[3.7rem] px-3 py-3 max-md:hidden max-md:z-[999]" id="mobsidebar">
    <nav class="flex-grow p-2 space-y-2 h-[65vh] overflow-y-auto" x-data="{ open: null }">
        <a href="/dashboard" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1] bg-white">
            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1V10a1 1 0 00-1-1H7a1 1 0 00-1 1v10a1 1 0 001 1h3z" />
            </svg>
            Home
        </a>
        <a href="/market-list" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/game-console.png" class="h-5 mr-2" alt="">

            Market
        </a>
        <a href="/result-list" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/result.png" class="h-5 mr-2" alt="">

            Result
        </a>
        <a href="/starline-list" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/star.png" class="h-5 mr-2" alt="">

            Starline
        </a>
         <a href="/starline-result-list" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/star.png" class="h-5 mr-2" alt="">

            Starline Result
        </a>
        <a href="/final-ank-list" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/result.png" class="h-5 mr-2" alt="">

            Final ank
        </a>
        <a href="/golden-ank" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/result.png" class="h-5 mr-2" alt="">

            Free Game
        </a>
         <a href="/users-list" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/user.png" class="h-5 mr-2" alt="">

            Create User
        </a>
         <a href="/users-gussing" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/user.png" class="h-5 mr-2" alt="">

            User Guissing
        </a>
        <a href="/admin/add-notice" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/notice.png" class="h-5 mr-2" alt="">

            Add Notice
        </a>
         <a href="/notify" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/notification.png" class="h-6 mr-2" alt="">

            Notification
        </a>
        <div class="text-[#303030] font-semibold mt-1 w-full">
            <button @click="open === 'front_cms' ? open = null : open = 'front_cms'"
                class="w-full flex items-center justify-between px-2 py-1  rounded-lg hover:bg-[#f1f1f1] focus:outline-none">
                <span class="flex items-center">
                    <img src="/public/icons/fron-cms.png" class="h-5 mr-2" alt="">
                    Front CMS
                </span>
                <svg :class="{'rotate-180': open === 'master'}" class="h-4 w-4 transform transition-transform"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open === 'front_cms'" x-collapse class=" mt-2 space-y-1">
                <a href="/admin/front-cms/home-banner"
                    class="block px-2 py-1 text-[#686868] rounded hover:bg-[#f1f1f1] hover:text-[#303030] text-decoration-none rounded-xl flex items-center justify-start gap-2 w-full">
                    <img src="/public/icons/arrow-right.png" class="h-5" alt="">

                    Home Banner
                </a>
                <a href="/admin/front-cms/kuber"
                    class="block px-2 py-1 text-[#686868] rounded hover:bg-[#f1f1f1] hover:text-[#303030] text-decoration-none rounded-xl flex items-center justify-start gap-2 w-full">
                    <img src="/public/icons/arrow-right.png" class="h-5" alt="">

                    Kuber Image
                </a>

                <a href="/admin/front-cms/nav-heading"
                    class="hidden px-2 py-1 text-[#686868] rounded hover:bg-[#f1f1f1] hover:text-[#303030] text-decoration-none rounded-xl flex items-center justify-start gap-2 w-full">
                    <img src="/public/icons/arrow-right.png" class="h-5" alt="">

                    Navbar Heading
                </a>

            </div>
        </div>

        <p class="text-xs text-gray-600 font-semibold mt-7">SETTING</p>

        <a href="/admin/setting" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-5 w-5 mr-2">
                <path fill-rule="evenodd" d="M6 2.176c0-.76.617-1.376 1.377-1.376h1.246c.76 0 1.376.616 1.376 1.376v.688c0 .19.126.396.358.517q.219.114.424.248c.221.144.465.152.632.056l.6-.347c.658-.38 1.5-.154 1.88.504l.622 1.08c.38.658.155 1.5-.503 1.88l-.648.373c-.163.094-.277.303-.269.56a5 5 0 0 1-.004.439c-.014.264.1.478.268.575l.653.377c.658.38.883 1.222.503 1.88l-.623 1.08a1.377 1.377 0 0 1-1.88.503l-.7-.405c-.164-.094-.401-.088-.62.048q-.164.102-.335.191c-.232.121-.358.326-.358.517v.811c0 .76-.616 1.376-1.376 1.376h-1.246c-.76 0-1.376-.616-1.376-1.376v-.81c0-.192-.127-.397-.359-.518a5 5 0 0 1-.333-.19c-.22-.138-.458-.143-.621-.049l-.7.405c-.659.38-1.5.154-1.88-.504l-.624-1.08a1.375 1.375 0 0 1 .504-1.879l.653-.377c.167-.097.282-.311.268-.575a5 5 0 0 1-.004-.439c.008-.257-.106-.465-.27-.56l-.647-.374a1.376 1.376 0 0 1-.504-1.88l.624-1.079a1.376 1.376 0 0 1 1.88-.504l.6.347c.166.096.41.088.631-.056q.205-.135.423-.248c.232-.121.359-.326.359-.517v-.688Zm2 7.324a1.5 1.5 0 1 0-.001-3.001 1.5 1.5 0 0 0 .001 3.001"></path>
            </svg>
            Settings
        </a>
    </nav>
    <script src="//unpkg.com/alpinejs" defer></script>




</aside>
<?php
}elseif($_SESSION['role'] == '2'){?>
<aside class="w-[16.5rem] bg-[#ebebeb] text-gray-300 flex flex-col fixed h-full z-10  md:flex rounded-tl-3xl mt-[3.7rem] px-3 py-3 max-md:hidden  max-md:z-[999] " id="mobsidebar">
    <nav class="flex-grow p-2 space-y-2 h-[65vh] overflow-y-auto" x-data="{ open: null }">
         <?php
         if ($_SESSION['role'] == '2') {
                $userid = $_SESSION['id'];
                $assignmarket = getData2("SELECT * FROM market_asign WHERE userid = '$userid'");
                $allowedMarkets = array_column($assignmarket, 'market');
                if(!empty($assignmarket)){
            ?>
        <a href="/admin/add-result" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/result.png" class="h-5 mr-2" alt="">

            Result
        </a>
         <?php
       }}
       ?>
        <?php
         if ($_SESSION['role'] == '2') {
                $userid = $_SESSION['id'];
                $assignmarket = getData2("SELECT * FROM starline_asign WHERE userid = '$userid'");
                $allowedMarkets = array_column($assignmarket, 'starline');
                if(!empty($assignmarket)){
            ?>
         <a href="/starline-result-list" class="flex items-center px-2 py-1 text-[#303030] hover:text-[#303030] text-decoration-none rounded-xl font-semibold hover:bg-[#f1f1f1]">
            <img src="/public/icons/star.png" class="h-5 mr-2" alt="">

            Starline Result
        </a>
       <?php
       }}
       ?>
    </nav>
    <script src="//unpkg.com/alpinejs" defer></script>




</aside>
<?php } ?>