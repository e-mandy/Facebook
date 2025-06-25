window.addEventListener('load', ()=>{
    if(!sessionStorage.getItem('token')){
        sessionStorage.getItem('url') === 'register' ? getRegister() : getLogin()
    }
})

