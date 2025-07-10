import { route } from "../routing/router.js"

export function emailIntroducing(){
    console.log(history.state.data.email)

    const email_send = document.querySelector('span[class="email_send"]')
    console.log(email_send)
    email_send.textContent = history.state.data.email

    
}

export function handleEmailForm(e, emailForm){
    
    e.preventDefault()
    const emaillCheckForm = new FormData(emailForm)

    let email_send = document.querySelector('span[class="email_send"]').innerText
    console.log(email_send)
    
    
    let code_OTP = emaillCheckForm.get('code_otp')

    emailCompare(email_send, code_OTP)
}

function emailCompare(email, code){

    const emailForm = new FormData(document.getElementById('email_verify'))
    let csrf_token = emailForm.get('csrf_token')

    fetch('http://localhost/Facebook/backend/auth/email_certify.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': csrf_token
        },
        body: JSON.stringify({
            email: email,
            code_otp: parseInt(code)
        })
    }).then(res => res.json())
    .then(res =>{
        if(res){
            let data = res
            route('/home', data)
        }else{
            route('/register', {response: false})
        }
    })
    
}


