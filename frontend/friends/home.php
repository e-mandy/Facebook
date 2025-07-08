<?php require_once "../includes/navbar.php" ?>
<div class="flex">
    <div class="w-[24%] fixed overflow-y-auto left-0 h-screen overflow-x-hidden pl-2 bg-white shadow-xl">
        <div class="flex justify-between items-center px-3 my-3">
            <h1 class="text-2xl font-bold">Ami(e)s</h1>
            <div class="rounded-[50%] bg-[#EFF2F5] hover:bg-[#D6D9DC] cursor-pointer p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
        </div>
        <ul>
            <li>
                <a class="cursor-pointer flex p-2 hover:bg-[#E5E8EA] w-[97%] rounded-lg items-center justify-between">
                    <div class="flex items-center gap-3"> 
                        <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                            <img class="h-6" src="assets/images/friends/friends_accueil.png" alt="" class="h-10 w-10">
                        </span>
                        <p class="font-semibold">Accueil</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="cursor-pointer flex justify-between p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                    <div class="flex items-center gap-3">
                        <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                            <img class="h-6" src="assets/images/friends/invitations.png" alt="">
                        </span>
                        <p class="font-semibold">Invitations</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="cursor-pointer flex justify-between p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                    <div class="flex items-center gap-3">
                        <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                            <img class="h-6" src="assets/images/friends/suggestions.png" alt="">
                        </span>
                        <p class="font-semibold">Suggestions</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="cursor-pointer flex justify-between p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                    <div class="flex items-center gap-3">
                        <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                            <img class="h-6" src="assets/images/friends/listes_friends.png" alt="">
                        </span>
                        <p class="font-semibold">Tou(te)s les ami(e)s</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="cursor-pointer flex justify-between p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                    <div class="flex items-center gap-3">
                        <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                            <img class="h-6" src="assets/images/friends/friends_annif.png" alt="">
                        </span>
                        <p class="font-semibold">Anniversaires</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="cursor-pointer flex justify-between p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                    <div class="flex items-center gap-3">
                        <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                            <img class="h-6" src="assets/images/friends/friends_accueil.png" alt="">
                        </span>
                        <p class="font-semibold">Listes personnalisées</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="w-[76%] ml-[24%] h-screen">
        <div class="flex flex-col items-center justify-center h-full">
            <svg viewBox="0 0 112 112" width="112" height="112" class="xfx01vb x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq" style="--color: var(--primary-icon);"><defs><clipPath id="a"><circle cx="72.58" cy="53.81" r="12.08" fill="none"></circle></clipPath></defs><g clip-path="url(#a)"><circle cx="72.58" cy="53.81" r="12.08" fill="#1876f2"></circle><circle cx="62.18" cy="40.55" r="14.72" fill="#a4a7ab"></circle><circle cx="88.92" cy="39.27" r="14.72" fill="#a4a7ab"></circle></g>
                <path d="M27.37 17.56h11.3a3.84 3.84 0 0 1 3.84 3.84v15h-19v-15a3.84 3.84 0 0 1 3.86-3.84z"></path>
                <rect width="19" height="24.75" x="23.52" y="26.9" fill="#90c3ff" rx="8.65"></rect>
                <path fill="#a4a7ab" d="M18.87 55.28h28.3a7 7 0 0 1 7 7v37.36H11.92V62.23a7 7 0 0 1 6.95-6.95z"></path>
                <path fill="#64676b" d="M68.63 68.28h5.06A26.12 26.12 0 0 1 99.8 94.4v5.25H42.51V94.4a26.12 26.12 0 0 1 26.12-26.12z"></path>
                <circle cx="66.32" cy="35.2" r="7.55" fill="#a4a7ab"></circle>
            </svg>
            <p class="font-bold text-gray-600 text-lg">Quand vous recevrez des invitations et des suggestions d’ami(e)s, vous les verrez ici.</p>
        </div>
    </div>
</div>