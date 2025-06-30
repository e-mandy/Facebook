window.addEventListener('load', ()=>{
    // if(!sessionStorage.getItem('token')){
    //     sessionStorage.getItem('url') === 'register' ? getRegister() : getLogin()
    // }

    fetch(`http://localhost/Facebook/frontend/auth/email_verification.php`)
    .then(res => res.text())
    .then(res =>{
        document.getElementById('root').innerHTML = res
    })
})

