function getCodeMail(){
    fetch(`http://localhost/Facebook/frontend/auth/email_verification.php`)
    .then(res => res.text())
    .then(res=>{
        document.getElementById('root').innerHTML = res

        emailForm = document.getElementById('email_verify')
        emailForm.addEventListener('submit', (event)=>{
            event.preventDefault()


        })    
    
    })
}

function emailCheck(email){
    
}


