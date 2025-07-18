import { route } from "./routing/router.js"

export function handleHomeRoute(element){
    const url = new URL(element.href)
    route(`${url.pathname}`)
}

export async function getPosts(){
    return fetch(`http://localhost/Facebook/backend/post/post_get.php`)
            .then(res=> res.json())
}

export function displayPosts(posts){
    let postsTab = []
    posts.forEach(post =>{
        let content = undefined
        if(post.type == "image"){
            content = `<img class="w-full h-full" src="storage/Images/${post.file}" />`
        }else if(post.type == "video"){
            content = `<video src="storage/Videos/${post.file}" />`
        }
        let postDisplay = `
            <div class="bg-white mb-8 rounded-lg shadow">
                <div class="px-3">
                    <input type="hidden" value="${post.id}">
                    <div class="flex gap-4 items-center">
                         <div class="h-10 w-10 border border-black rounded-[50%] flex items-center justify-center">
                            <img class="object-contain" src="#"/>
                        </div>
                        <div>
                            <h4>John Doe</h4>
                            <p>Publication recommandée</p>
                        </div>
                    </div>
                    <p class="py-2">${post.description}</p>
                </div>
                <div class="h-[530px]">
                    ${content}
                </div>
                <div class="flex flex-col gap-2 px-3 py-4">
                    <div class="flex justify-between">
                        <div class="flex gap-2">
                            <img src="#" />
                            <p>7,4k</p>
                        </div>
                        <div class="flex gap-4">
                            <p>6,2k commentaires</p>
                            <p>59 partages</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex justify-around">
                        <a href="#" class="flex w-[25%] gap-2 items-center hover:bg-[#F2F2F2] justify-center p-1 rounded-lg">
                            <img class="h-5" src="assets/images/home/jaime.png" />
                            <span>J'aime</span>
                        </a>
                        <a href="#" class="flex w-[25%] gap-2 items-center hover:bg-[#F2F2F2] justify-center p-1 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                            </svg>
                            <span>Commenter</span>
                        </a>
                        <a href="#" class="flex w-[25%] gap-2 items-center hover:bg-[#F2F2F2] justify-center p-1 rounded-lg">
                            <img class="h-5" src="assets/images/home/partager.png" />
                            <span>Partager</span>
                        </a>
                    </div>
                </div>
            </div>
        `
        postsTab.push(postDisplay)
    })

    return postsTab
}