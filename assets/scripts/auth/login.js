function getLogin(){
    // event.preventDefault()
    fetch(`http://localhost/Facebook/frontend/auth/login.html`)
    .then(res => res.text())
    .then(res =>{
        document.getElementById('root').innerHTML = res
        sessionStorage.setItem('url', 'login')
    })
}