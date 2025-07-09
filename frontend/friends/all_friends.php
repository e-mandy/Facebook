<div class="h-screen">
    <?php require_once "../includes/navbar.php" ?>
    <div class="h-full">
        <div class="w-[24%] fixed overflow-y-auto left-0 h-screen overflow-x-hidden pl-1 bg-white shadow-xl">
            <div class="flex gap-3 items-center my-3">
                <div class="hover:rounded-[50%] hover:bg-[#D6D9DC] cursor-pointer p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <p>Ami(e)s</p>
                    <h1 class="text-2xl font-bold">Tou(te)s les ami(e)s</h1>
                </div>
            </div>
            <div class="pl-2">
                <label for="" class="bg-[#EFF2F5] flex rounded-lg w-[95%] p-1 items-center gap-2 mb-4">
                    <img class="h-4 w-5" src="assets/images/navbar/loupe.png" alt="">
                    <input type="text" class="w-full outline-0" placeholder="Retrouver des ami(e)s">
                </label>
                <hr class="w-[95%] mb-2">

                <ul>
                    <h4 class="font-semibold">Amis</h4>
                    <p class="text-xs">Aucun ami à afficher</p>
                </ul>
            </div>
        </div>
    
        <div class="w-[76%] ml-[24%] h-full">
            <div class="flex flex-col items-center justify-center h-full">
                <svg viewBox="0 0 112 112" width="112" height="112" class="xfx01vb x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq" style="--color: var(--primary-icon);"><defs><clipPath id="a"><circle cx="72.58" cy="53.81" r="12.08" fill="none"></circle></clipPath></defs><g clip-path="url(#a)"><circle cx="72.58" cy="53.81" r="12.08" fill="#1876f2"></circle><circle cx="62.18" cy="40.55" r="14.72" fill="#a4a7ab"></circle><circle cx="88.92" cy="39.27" r="14.72" fill="#a4a7ab"></circle></g>
                    <path d="M27.37 17.56h11.3a3.84 3.84 0 0 1 3.84 3.84v15h-19v-15a3.84 3.84 0 0 1 3.86-3.84z"></path>
                    <rect width="19" height="24.75" x="23.52" y="26.9" fill="#90c3ff" rx="8.65"></rect>
                    <path fill="#a4a7ab" d="M18.87 55.28h28.3a7 7 0 0 1 7 7v37.36H11.92V62.23a7 7 0 0 1 6.95-6.95z"></path>
                    <path fill="#64676b" d="M68.63 68.28h5.06A26.12 26.12 0 0 1 99.8 94.4v5.25H42.51V94.4a26.12 26.12 0 0 1 26.12-26.12z"></path>
                    <circle cx="66.32" cy="35.2" r="7.55" fill="#a4a7ab"></circle>
                </svg>
                <h3 class="font-bold text-xl">Aucun ami à afficher</h3>
                <p class="text-gray-600 text-lg">Quand vous recevrez des invitations et des suggestions d’ami(e)s, vous les verrez ici.</p>
            </div>
        </div>
    </div>
</div>