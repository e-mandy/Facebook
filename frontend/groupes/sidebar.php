<div class="w-[24%] overflow-y-auto fixed left-0 h-screen overflow-x-hidden pl-2 bg-white shadow-xl">
    <div class="pl-2 px-3">
        <div class="flex justify-between items-center my-3">
            <h1 class="text-2xl font-bold">Groupes</h1>
            <div class="rounded-[50%] bg-[#EFF2F5] hover:bg-[#D6D9DC] cursor-pointer p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
        </div>
        <label for="" class="bg-[#EFF2F5] flex rounded-2xl w-full p-2 items-center gap-2 mb-4">
            <img class="h-4 w-5" src="assets/images/navbar/loupe.png" alt="">
            <input type="text" class="w-full outline-0" placeholder="Retrouver des groupes">
        </label>
    </div>
    <ul class="mb-2">
        <li>
            <a class="cursor-pointer gap-3 flex p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                    <img class="h-6" src="assets/images/friends/suggestions.png" alt="">
                </span>
                <p class="font-semibold">Votre fil</p>
            </a>
        </li>
        <li>
            <a class="cursor-pointer gap-3 flex p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                    <img class="h-6" src="assets/images/friends/listes_friends.png" alt="">
                </span>
                <p class="font-semibold">Découvrir</p>
            </a>
        </li>
        <li>
            <a class="cursor-pointer gap-3 flex p-2 w-[97%] hover:bg-[#E5E8EA] rounded-lg items-center">
                <span class="rounded-[50%] bg-[#D6D9DC] p-2">
                    <img class="h-6" src="assets/images/friends/friends_annif.png" alt="">
                </span>
                <p class="font-semibold">Vos groupes</p>
            </a>
        </li>
    </ul>
    <button class="bg-[#E2E9F1] w-[97%] rounded-lg p-2 font-semibold text-[#005EC7] mb-4">+ Créer un nouveau groupe</button>
    <hr class="w-[97%] mb-4">
    <div>
        <p class="flex w-[97%] justify-between">Groupes dont vous êtes membre <a href="" class="text-blue-600">Tout voir</a></p>
    </div>
</div>