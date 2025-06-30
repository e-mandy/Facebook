function getLogin(){
    // event.preventDefault()
    fetch(`http://localhost/Facebook/frontend/auth/login.php`)
    .then(res => res.text())
    .then(res =>{
        document.getElementById('root').innerHTML = res
        sessionStorage.setItem('url', 'login')
    })
}