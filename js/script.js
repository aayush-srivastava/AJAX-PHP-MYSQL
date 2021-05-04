const name = document.getElementById('name')
const email = document.getElementById('email')
const phone = document.getElementById('phone')
const form = document.getElementById('form')
const errorEle = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (phone.value.match("/^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/")) {
        messages.push('Enter a valid phone number')
    }
    if (messages.length > 0) {
        e.preventDefault()
        errorEle.innerText = messages.join(', ')
    }

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(email.value)) {
        successMessage(email);
    } else {
        errorMessage(email, "Enter a valid email");
        e.preventDefault()
    }

})