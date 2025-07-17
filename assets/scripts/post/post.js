function addPostPop(e){
    const button = e.target
    const divParent = button.parentElement
    
    let popupPost = popPost()
    divParent.insertAdjacentHTML('afterend', popupPost)

    const textarea = document.querySelector('textarea')
    autoTextareaGrow(textarea)
    
    const publierPost = document.getElementById('publier_post')
    
    const file = document.querySelector('input[type="file"]')
    
    const allInputs = document.querySelectorAll('form input, textarea')
    allInputs.forEach(input => {
        input.addEventListener('input', ()=>{
            
            if(textarea.value != "" || file.files.length != 0){
                publierPost.disabled = false
            }else{
                publierPost.disabled = true
            }
        })
    });
    
    const form = document.getElementById('postForm')
    const preview = document.getElementById('preview')
    file.addEventListener('change', ()=>{
        displayPreview(form, preview)
    })
    
    form.addEventListener('submit', (event)=>{
        handlePostForm(event)
    })
}

function popPost(){
    return `
        <form method="POST" enctype="multipart/form-data" class="min-h-[400px] w-[500px] bg-white fixed top-[50%] translate-x-[-50%] translate-y-[-50%] left-[50%] rounded-lg" id="postForm">
            <div class="absolute top-3 right-3 w-6 h-6 rounded-[50%] bg-[#D6D9DC] p-1 cursor-pointer">
                <img src="assets/images/close.png" class="w-10">
            </div>
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
                <div class="min-h-51">
                    <textarea name="description" class="w-full resize-none text-2xl min-h-51 outline-black p-2 outline-none" placeholder="Quoi de neuf, Joliette ?"></textarea>
                </div>
                <div id="preview" class="object-contain w-[50px] h-[50px] rounded-lg ml-4"></div>
                <div class="w-full p-4 post-action">
                    <div class="flex items-center border-1 border-[#D0D3D6] p-3 gap-4 m-auto font-semibold rounded-lg shadow-sm justify-between mb-3">
                        <label for="post" class="cursor-pointer">
                            Ajouter à votre publication
                            <input type="file" name="post" id="post" class="hidden" accept="image/*, video/*">
                        </label>
                        <div>
                            <img src="assets/images/home/image_download.png" class="h-6">
                        </div>
                    </div>
                    <button type="submit" id="publier_post" class="disabled:bg-gray-300 disabled:text-gray-500 font-bold text-center w-full py-2 rounded-lg cursor-pointer bg-blue-600 text-white" disabled>Publier</button>
                </div>
            </div>
        </form>
    `
}

function autoTextareaGrow(element){
    element.addEventListener('input', (e)=>{
        element.style.height = "auto"
        let textHeight = e.target.scrollHeight
        let minTextHeight = 51
        element.style.height = `${Math.max(textHeight, minTextHeight)}px` 
    })
}

function displayPreview(form, preview){
    let formData = new FormData(form)
    let imgURL = formData.get('post')
    
    if(imgURL){
        let tempURL = URL.createObjectURL(imgURL)
        const img = document.createElement('img')
        img.src = tempURL
        preview.innerHTML = ""
        preview.appendChild(img)
        img.classList.add('w-full')
        img.classList.add('h-full')
        preview.classList.add('border-2')
        preview.classList.add('border-blue-600')
    }
}

function handlePostForm(e){
    e.preventDefault()
    const postForm = new FormData(e.target)

    fetch('http://localhost/Facebook/backend/post/post_action.php', {
        method: "POST",
        body: postForm
        
    })
    .then(res => res.json())
    .then(res => {
        console.log("Je suis ici : ", res)
    })
}