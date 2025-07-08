<link href="assets/styles/navbar.css" rel="stylesheet">
<nav class="flex justify-between items-center shadow bg-white px-2 h-16 sticky top-0 z-99">
    <div class="flex items-center gap-2">
        <a href=""><img class="h-10" src="assets/images/navbar/Facebook_logo.png"></a>
        <label class="flex items-center bg-[#F2F2F2] py-2 px-3 rounded-2xl gap-2">
            <img class="h-5 w-5" src="assets/images/navbar/loupe.png" alt="">
            <input type="text" placeholder="Rechercher sur Facebook">
        </label>
    </div>
    <div class="w-1/3 h-full">
        <ul class="flex items-center gap-2 w-full justify-center h-full">
            <li class="flex flex-col justify-center w-[25%] h-full relative">
                <a href="#" class=" h-[85%] flex items-center hover:bg-[#F2F2F2] block rounded-lg">
                    <img class="h-7 m-auto" src="assets/images/navbar/accueil.png" alt="">
                </a>
                <div class="h-1 absolute bottom-0 w-full"></div>
            </li>
            <li class="flex flex-col justify-center w-[25%] h-full relative">
                <a href="#" class="h-[85%] flex items-center hover:bg-[#F2F2F2] block rounded-lg">
                    <img class="h-7 m-auto" src="assets/images/navbar/amis.png" alt="">
                </a>
                <div class="h-1 absolute bottom-0 w-full"></div>
            </li>
            <li class="flex flex-col justify-center w-[25%] h-full relative">
                <a href="#" class="h-[85%] flex items-center hover:bg-[#F2F2F2] block rounded-lg">
                    <img class="h-7 m-auto" src="assets/images/navbar/groupe.png" alt="">
                </a>
                <div class="h-1 absolute bottom-0 w-full"></div>
            </li>
            <li class="flex flex-col justify-center w-[25%] h-full relative">
                <a href="#" class="h-[85%] flex items-center hover:bg-[#F2F2F2] block rounded-lg">
                    <img class="h-7 m-auto" class="hidden" src="assets/images/navbar/video.png" alt="">
                </a>
                <div class="h-1 absolute bottom-0 w-full"></div>
            </li>
            <li class="flex flex-col justify-center w-[25%] h-full relative">
                <a href="#" class="h-[85%] flex items-center hover:bg-[#F2F2F2] block rounded-lg">
                    <img class="h-7 m-auto" src="assets/images/navbar/marketplace.png" alt="">
                </a>
                <div class="h-1 absolute bottom-0 w-full"></div>
            </li>
        </ul>
    </div>
    <div class="flex justify-between gap-2 items-center">
        <button class="py-1 px-2 rounded-lg bg-[#F2F2F2]">
            <p>Trouvez vos ami...</p>
        </button>
        <button class="rounded-[50%] p-3 hover:bg-[#D6D9DC]  bg-[#F2F2F2]">
            <img class="h-5 m-auto" src="assets/images/navbar/la-grille.png" alt="">
        </button>
        <button class="rounded-[50%] p-2 hover:bg-[#D6D9DC]  bg-[#F2F2F2]">
            <img class="h-7" src="assets/images/navbar/messenger.png" alt="">
        </button>
        <button class="rounded-[50%] p-2 hover:bg-[#D6D9DC]  bg-[#F2F2F2]">
            <img class="h-7" src="assets/images/navbar/notification.png" alt="">
        </button>
        <div class="rounded-[50%] p-2 hover:bg-[#D6D9DC]  bg-[#F2F2F2]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
        </div>
    </div>
</nav>