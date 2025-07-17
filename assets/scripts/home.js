import { route } from "./routing/router.js"

export function handleHomeRoute(element){
    const url = new URL(element.href)
    route(`${url.pathname}`)
}

export function getPosts(){
    fetch(`http://localhost/Facebook/backend/post/post_get.php`)
    .then(res=> res.json())
    .then(res=>{
        console.log('Posts : ', res)
    })
}