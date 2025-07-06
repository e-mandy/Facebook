import { route } from "../routing/router.js"


export function handleRegisterForm(event, registerForm){
    event.preventDefault()
    validationInput()
    if(sessionStorage.getItem('isValidForm') == "true"){
        console.log("C'est good")
        emailVerify(registerForm)
    }
}


export function optionMaking(){
    let now = new Date()

    let selectDay = document.getElementById('day')
    const numberDay = 31
    for(let i = 1; i <= numberDay; i++){
        const option = document.createElement('option')
        option.value = i
        option.textContent = i
        if(i == now.getDate()){
            option.selected = true
        }
        selectDay.appendChild(option)
        
    }

    let selectMonth = document.getElementById('month')
    let month = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]
    let i = 0
    month.map((value, index) =>{
        i++
        const option = document.createElement('option')
        option.value = i
        option.textContent = value
        if(index == now.getMonth()){
            option.selected = "true"
        }
        selectMonth.appendChild(option)
    }) 

    let selectYear = document.getElementById('year')

    let currentYear = now.getFullYear()
    for(let i = currentYear; i>= currentYear - 100; i--){
        const option = document.createElement('option')
        option.value = i
        option.textContent = i
        selectYear.appendChild(option)
    }
}

function validateName(value){
    const regex = /^[^0-9@#!=\)\(&]+$/
    return regex.test(value)
}

function validateEmail(email){
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    return regex.test(email)
}

function validatePassword(password){
    const regex = /^.{8,}$/
    return regex.test(password)
}

function validationInput(){

    const prenom = document.querySelector('.prenom').value
    const nomFamille = document.querySelector('.nom_famille').value
    const email = document.querySelector('.email').value
    const password = document.querySelector('.password').value
    

    //On initialise dans le storage un champ qui se ccharge de vérifier si toutes les données renseignées respectent les conditions
    sessionStorage.setItem('isValidForm', true)

    if(!validateName(prenom) || !validateName(nomFamille) || !validateEmail(email) || !validatePassword(password)){
        
        sessionStorage.setItem('isValidForm', false)


        if(!validateName(prenom)){
            sessionStorage.setItem('error', 'Le prénom ne doit pas contenir de chiffres ni de caractères spéciaux !!')
            const spanError = document.createElement('span')
            spanError.textContent = sessionStorage.getItem('error')
            document.querySelector('.prenom').parentElement.appendChild(spanError)

        }

        if(!validateName(nomFamille)){
            sessionStorage.setItem('error', 'Le nom de famille ne doit contenir de chiffres ni de caractères spéciaux !!')
            const spanError = document.createElement('span')
            spanError.textContent = sessionStorage.getItem('error')
            document.querySelector('.nom_famille').parentElement.appendChild(spanError)
        }

        if(!validateEmail(email)){
            sessionStorage.setItem('error', "L'email que vous avez renseigné n'est pas correcte.")
            const spanError = document.createElement('span')
            spanError.textContent = sessionStorage.getItem('error')
            document.querySelector('.email').parentElement.appendChild(spanError)
        }

        if(!validatePassword(password)){
            sessionStorage.setItem('error', 'Le mot de passe doit contenir au moins 8 caractères.')
            const spanError = document.createElement('span')
            spanError.textContent = sessionStorage.getItem('error')
            document.querySelector('.password').parentElement.appendChild(spanError)
        }
        
    }
    

}

function emailVerify(registerForm){

    let registerData = new FormData(registerForm)

    const csrf_token = registerData.get('csrf_token')
    const nom = registerData.get('nom_famille')
    const prenom = registerData.get('prenom')
    const day = parseInt(registerData.get('day')) < 10 ? '0'+ registerData.get('day').toString() : registerData.get('day')
    const month = parseInt(registerData.get('month')) < 10 ? '0'+ registerData.get('month').toString() : registerData.get('month')
    const year = registerData.get('year')
    const genre = registerData.get('genre')
    const email = registerData.get('email')
    const password = registerData.get('password')


    fetch(`http://localhost/facebook/backend/auth/email_verify.php`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': csrf_token
        },
        body: JSON.stringify({
            nom_famille: nom,
            prenom: prenom,
            day: day,
            month: month,
            year: year,
            genre: genre,
            email: email,
            password: password
        })
    })
    .then(res => {
        if(res){
            route('/email_verify', {email: email})
        }else{
            console.log('No Good : ' + res)
        }
    })

}

