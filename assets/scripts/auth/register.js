function getRegister(){
    fetch(`http://localhost/Facebook/frontend/auth/register.php`)
    .then(response => response.text())
    .then(response =>{
        document.getElementById('root').innerHTML = response
        sessionStorage.setItem('url', 'register')
        optionMaking()

        const registerForm = document.getElementById('register')

        registerForm.addEventListener('submit', (event)=>{
            event.preventDefault()
            validationInput()
        })
        

        if(sessionStorage.getItem('isValidForm') == true){

        }
    })

    
}

function optionMaking(){
    let now = new Date()

    let selectDay = document.getElementById('day')
    numberDay = 31
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
            option.selected = true
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

function emailVerify(){
    const registerForm = document.getElementById('register')

    let registerData = new FormData(registerForm)

    csrf_token = registerData.get('csrf_token')
    nom = registerData.get('nom_famille')
    prenom = registerData.get('prenom')
    day = registerData.get('day')
    month = registerData.get('month')
    year = registerData.get('year')
    genre = registerData.get('genre')
    email = registerData.get('email')
    password = registerData.get('password')


    fetch(`http://localhost/Facebook/backend/auth/email_verify.php`, {
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
        .then(res => res.json())
        .then(res =>{
            if(res){
                getEmailVerification()
            }else{
                sessionStorage('error', "Le code de validation n'a pas été envoyé.")
                getRegister()
            }
        })
    })

}

/*
    const registerForm = document.getElementById('register')

    let registerData = new FormData(registerForm)

    nom = registerData.get('nom_famille')
    prenom = registerData.get('prenom')
    day = registerData.get('day')
    month = registerData.get('month')
    year = registerData.get('year')
    genre = registerData.get('genre')
    email = registerData.get('email')
    password = registerData.get('password')


    fetch(`http://localhost/Facebook/backend/auth/register.php`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
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
        .then(res => res.json())
        .then(res =>{
            console.log(res)
        })
    })
*/