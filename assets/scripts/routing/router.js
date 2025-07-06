import { routesGet } from './links.js' 

export function route(routeName, data = {}){
    let routeLocation = routeName
    if(routeName.includes('/Facebook')){
        routeLocation = routeName.replace('/Facebook', '')
    }

    if(routesGet[routeLocation]){
        history.pushState({ page: routeLocation, data: data }, "", routeName.includes('/Facebook') ? routeName : `/Facebook${routeName}`)
        
        handleRoute(routeLocation)
    }
}

export function handleRoute(routeName){
    const root = document.getElementById('root')
    let link = routesGet[routeName].link
    fetch(link)
    .then(res => res.text())
    .then(res =>{
        root.innerHTML = res

        let route = routesGet[routeName]

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
    if("page" in e.state){
        console.log("Good")
        route(e.state.page)
    }
})
