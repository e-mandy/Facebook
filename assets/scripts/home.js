import { route } from "./routing/router.js"

export function handleHomeRoute(element){
    const url = new URL(element.href)
    route(`${url.pathname}`)
}

export async function getPosts(){
    return fetch(`http://localhost/Facebook/backend/post/post_get.php`)
            .then(res=> res.json())
}

// export function displayPosts(posts){
//     let postsTab = []
//     posts.forEach(post =>{
//         let content = undefined
//         if(post.type == "image"){
//             content = `<img src="storage/Images/${post.file}" />`
//         }else if(post.type == "video"){
//             content = `<video src="storage/Videos/${post.file}" />`
//         }
//         let postDisplay = `
//             <div class="bg-red-500">
//                 <div class="">
//                     <input type="hidden" value="${post.id}">
//                     <div>
//                          <div>
//                             <img src="#"/>
//                         </div>
//                         <div>
//                             <h4>John Doe</h4>
//                             <p>Publication recommandée</p>
//                         </div>
//                     </div>
//                     <p>${post.description}</p>
//                 </div>
//                 <div>
//                     ${content}
//                 </div>
//                 <div>
//                     <div>
//                         <div>
//                             <img src="#" />
//                             <p>7,4k</p>
//                         </div>
//                         <div>
//                             <p>6,2k commentaires</p>
//                             <p>59 partages</p>
//                         </div>
//                     </div>
//                     <hr>
//                     <div>
//                         <div>
//                             <img src="#" />
//                             <span>J'aime</span>
//                         </div>
//                         <div>
//                             <img src="#" />
//                             <span>Commenter</span>
//                         </div>
//                         <div>
//                             <img src="#" />
//                             <span>Partager</span>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         `
//         posts.push(postDisplay)
//     })

//     return postsTab
// }