function getRegister(){
    fetch(`http://localhost/Facebook/frontend/auth/register.html`)
    .then(response => response.text())
    .then(response =>{
        document.getElementById('root').innerHTML = response
        sessionStorage.setItem('url', 'register')
        optionMaking()
        validationInput()
    })

    
}

function optionMaking(){
    let selectDay = document.getElementById('day')
    numberDay = 31
    for(let i = 1; i <= numberDay; i++){
        const option = document.createElement('option')
        option.value = i
        option.textContent = i
        selectDay.appendChild(option)
        
    }

    let selectMonth = document.getElementById('month')
    let month = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]
    month.map(value =>{
        const option = document.createElement('option')
        option.value = value
        option.textContent = value
        selectMonth.appendChild(option)
    }) 
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

    const registerForm = document.getElementById('register')

    registerForm.addEventListener('submit', (event)=>{
        event.preventDefault()

        const prenom = document.querySelector('.prenom').value
        const nomFamille = document.querySelector('.nom_famille').value
        const email = document.querySelector('.email').value
        const password = document.querySelector('.password').value

        if(!validateName(prenom)){
            sessionStorage.setItem('error', 'Le prénom ne doit pas contenir de chiffres ni de caractères spéciaux !!')
        }

        if(!validateName(nomFamille)){
            sessionStorage.setItem('error', 'Le nom de famille ne doit contenir de chiffres ni de caractères spéciaux !!')
        }

        if(!validateEmail(email)){
            sessionStorage.setItem('error', "L'email que vous avez renseigné n'est pas correcte.")
        }

        if(!validatePassword(password)){
            sessionStorage.setItem('error', 'Le mot de passe doit contenir au moins 8 caractères.')
        }
        

        if(sessionStorage.key('error')){
            console.log(sessionStorage.getItem('error'))
        }
    })

    
}

