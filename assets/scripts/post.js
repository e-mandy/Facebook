function addPostPop(e){
    const button = e.target
    const divParent = button.parentElement

    let popupPost = popPost()
    divParent.insertAdjacentHTML('afterend', popupPost)
    
}

function popPost(){
    return `
        <form action="#" method="POST"  class="h-[400px] w-[500px] bg-white fixed top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] rounded-lg after:content-[''] after:bg-[url('assets/images/close.png')] after:bg-contain after:rounded-[50%] after:bg-[#D6D9DC] after:w-6 after:h-6 after:absolute after:top-3 after:right-2">
            <h2 class="text-center py-4 text-lg font-bold">Créer une publication</h2>
            <hr>
            <div class="px-4 h-full flex flex-col">
                <div class="flex w-full items-center gap-3 py-2">
                    <div class="p-2 hover:bg-[#D6D9DC] w-fit rounded-[50%]  bg-[#F2F2F2]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                    <h4>Joliette Alberto</h4>
                </div>
                <textarea class="w-full resize-none focus:outline-none text-xl" placeholder="Quoi de neuf, Joliette ?"></textarea>
                <div class="flex items-center border-1 border-[#D0D3D6] p-3 font-semibold rounded-lg shadow-sm justify-between">
                    <label for="post">
                        Ajouter à votre publication
                        <input type="file" name="post" id="post" class="hidden">
                    </label>
                    <div>
                        <img src="assets/images/home/image_download.png" class="h-6">
                    </div>
                </div>
            </div>
        </form>
    `
}