import { handleRegisterForm, optionMaking } from "../auth/register.js"
import { route } from "./router.js"

export const routes = {

    '/': {
        link: "http://localhost/Facebook/index.php",
        
    },
    '/register': {
        link: "http://localhost/Facebook/frontend/auth/register.php",
        onLoad: ()=>{
            optionMaking()
        },
        action: ()=>{
            const loginLink = document.querySelector('.loginLink')
            loginLink.addEventListener('click', (e)=>{
                e.preventDefault()
                route('/login')
            })

            const registerForm = document.getElementById('register')
            registerForm.addEventListener('submit', (e)=>{
                handleRegisterForm(e, registerForm)
            })
        }
    },
    '/login': {
        link: "http://localhost/Facebook/frontend/auth/login.php",
    }

}