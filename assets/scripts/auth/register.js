function getRegister(){
    fetch(`http://localhost/Facebook/frontend/auth/register.html`)
    .then(response => response.text())
    .then(response =>{
        document.getElementById('root').innerHTML = response
        sessionStorage.setItem('url', 'register')
        optionMaking()
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

const registerForm = document.getElementById('register')
registerForm.addEventListener('submit', (event)=>{
    event.preventDefault()

    
})