<div class="h-[13vh] px-5 bg-black flex items-center justify-center fixed bottom-0 left-0 w-full transition-transform duration-700 ease-in-out z-50" id="playbar">
    <div class="w-full flex items-center justify-start">
        <div class="w-[10vh] h-[10vh] rounded-lg overflow-hidden">
            <img class="w-full h-full object-cover" src="/public/song-banner/Gul - Anuv Jain.jpg" alt="">
        </div>
        <div class="flex flex-col ml-4">
            <h2 class="text-white font-bold">Gul</h2>
            <p class="text-gray-400 text-xs">Anuv Jain</p>
        </div>
    </div>
    <div class="w-full flex items-center justify-center flex-col gap-2">
        <div class="w-full flex items-center justify-center gap-6">
           <div class="w-[3vh] h-[3vh] flex items-center justiy-center cursor pointer">
                <img class="opacity-[50%]" src="/public/icons/shuffle.png" alt="">
            </div>
            <div class="w-[5vh] h-[5vh] flex items-center justiy-center cursor pointer">
                <img class="rotate-[180deg] opacity-[50%]" src="/public/icons/next.png" alt="">
            </div>
            <div class="w-[6vh] h-[6vh] flex items-center justiy-center bg-white rounded-full p-1.5 cursor pointer">
                <img src="/public/icons/pause.png" alt="">
            </div>
            <div class="w-[5vh] h-[5vh] flex items-center justiy-center cursor pointer">
                <img class="opacity-[50%]" src="/public/icons/next.png" alt="">
            </div>
             <div class="w-[3vh] h-[3vh] flex items-center justiy-center cursor pointer">
                <img class="rotate-[180deg] opacity-[50%]" src="/public/icons/loop.png" alt="">
            </div>
        </div>
        <div class="flex w-full items-center justify-center gap-2">
            <span class="w-fit text-gray-400 text-xs">1:30</span>
            <div class="bg-[#4d4d4d] w-[70%] h-1 rounded-full relative">
                <div class="bg-white w-[27%] h-full rounded-full top-0 left-0"></div>
                <div class="bg-white w-2 h-2 rounded-full absolute top-1/2 left-1/4 transform -translate-y-1/2"></div>
            </div>
            <span class="w-fit text-gray-400 text-xs">3:10</span>
        </div>
    </div>
    <div class="w-full flex items-center justify-end gap-4">
        <div class="flex w-[70%] items-center justify-end gap-2">
            <div class="w-[3vh] h-[3vh] flex items-center justiy-center cursor pointer">
                <img class="opacity-[50%]" src="/public/icons/volume.png" alt="">
            </div>
            <div class="bg-[#4d4d4d] w-[30%] h-1 rounded-full relative">
                <div class="bg-white w-[27%] h-full rounded-full top-0 left-0"></div>
            </div>
        </div>
         <div class="w-[3vh] h-[3vh] flex items-center justiy-center cursor pointer fullscreenBtn">
                <img class="opacity-[50%] fullscreenimg" src="/public/icons/full-screen.png" alt="">
            </div>
    </div>
</div>