import { route } from './routing/router.js'

window.addEventListener('load', ()=>{
    let path = location.pathname
    console.log(path)
    route(path)
})


