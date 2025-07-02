import routes from './links.js'

export function route(routeName){
    history.pushState({}, "", routeName)
    handleRoute(routeName)
}

export function handleRoute(routeName){
    root = document.getElementById('root')
    
    fetch(routes[routeName])
    .then(res => res.text())
    .then(res =>{
        root.innerHTML = res
    })
}