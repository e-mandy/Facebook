import { routes } from './links.js' 

export function route(routeName){
    let routeLocation = routeName
    if(routeName.includes('/Facebook')){
        routeLocation = routeName.replace('/Facebook', '')
    }

    if(routes[routeLocation]){
        history.pushState({}, "", routeName.includes('/Facebook') ? routeName : `/Facebook${routeName}`)
        handleRoute(routeLocation)
    }
    
}

export function handleRoute(routeName){
    const root = document.getElementById('root')
    let link = routes[routeName].link
    console.log("Dohi pour le moment")
    fetch(link)
    .then(res => res.text())
    .then(res =>{
        root.innerHTML = res

        let route = routes[routeName]

        //On peut également utiliser la propriété object.hasOwnProperty()
        if("onLoad" in route){
            route.onLoad()
        }

        if("action" in route){
            route.action()
        }
        
    })
}

window.addEventListener('popstate', (e)=>{
    console.log(e.state)
})