import { emailIntroducing, handleEmailForm } from "../auth/email.js"
import { handleRegisterForm, optionMaking } from "../auth/register.js"
import { route } from "./router.js"

export const routesGet = {

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
    },

    '/email_verify': {
        link: "http://localhost/Facebook/frontend/auth/email_verification.php",
        onLoad: ()=>{
            emailIntroducing()
        },
        action: ()=>{
            const emailForm = document.getElementById('email_verify')
            emailForm.addEventListener('submit', (e)=>{
                handleEmailForm(e, emailForm)
            })
        },
    },

    '/home': {
        link: 'http://localhost/Facebook/frontend/home.php'
    },

    '/friends': {
        link: 'http://localhost/Facebook/frontend/friends/home.php'
    },

    '/friends-requests': {
        link: 'http://localhost/Facebook/frontend/friends/invitations.php'
    },

    '/friends-suggestions': {
        link: 'http://localhost/Facebook/frontend/friends/suggestions.php'
    },

    '/friends-all': {
        link: 'http://localhost/Facebook/frontend/friends/all_friends.php'
    },

    '/friends-birthday': {
        link: 'http://localhost/Facebook/frontend/friends/birthday.php'
    },

    '/groupes': {
        link: 'http://localhost/Facebook/frontend/groupes/home.php'
    },

    '/groupes-discover': {
        link: 'http://localhost/Facebook/frontend/groupes/discover.php'
    },

    '/groupes-all': {
        link: 'http://localhost/Facebook/frontend/groupes/all_groupes.php'
    }
   

}

export const routesPost = {
    '/register': {
        link: 'http://localhost/Facebook/backend/auth/'
    }
}