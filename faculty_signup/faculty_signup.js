let validemail = false;
let validapppasword = false;
let validfirstname = false;
let validlname = false;
let validpassword = false;

let firstname = document.getElementById('firstname');
let lastname = document.getElementById('lastname');

firstname.addEventListener('blur', () => {
    console.log('firstname is blurred');
    let str = firstname.value;
    if (str != '') {
        console.log('valid firstname');
        firstname.classList.remove('is-invalid');
        validfirstname = true;
    }
    else {
        console.log('not valid name');
        firstname.classList.add('is-invalid');
        validfirstname = false;
    }
})

lastname.addEventListener('blur', () => {
    console.log('lastname is blurred');
    let str = lastname.value;
    if (str != '') {
        console.log('valid lastname');
        lastname.classList.remove('is-invalid');
        validlname = true;
    }
    else {
        console.log('not valid name');
        lastname.classList.add('is-invalid');
        validlname = false;
    }
})

email.addEventListener('blur', () => {
    console.log('email is blurred');
    let regemail = /^([0-9a-zA-Z]+)@([0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let str = email.value;
    if (regemail.test(str)) {
        console.log('valid email');
        email.classList.remove('is-invalid');
        validemail = true;
    }
    else {
        console.log('not valid email');
        email.classList.add('is-invalid');
        validemail = false;
    }
})

apppassword.addEventListener('blur', () => {
    console.log('apppassword is blurred');
    let str = apppassword.value;
    if (str != '') {
        console.log('valid apppassword');
        apppassword.classList.remove('is-invalid');
        validapppasword = true;
    }
    else {
        console.log('not valid appPassword');
        apppassword.classList.add('is-invalid');
        validapppasword = false;
    }
})

password.addEventListener('blur', () => {
    console.log('password is blurred');
    let str = password.value;
    if (str != '') {
        console.log('valid password');
        password.classList.remove('is-invalid');
        validpassword = true;
    }
    else {
        console.log('not valid password');
        password.classList.add('is-invalid');
        validpassword = false;
    }
})

const showPassword = document.querySelector('#show-password');
const passwordFeild = document.querySelector('#password');
showPassword.addEventListener("click", () => {
    let type = passwordFeild.getAttribute("type") === "password" ? "text" : "password";
    passwordFeild.setAttribute("type", type);
    if(showPassword.classList.contains('fa-eye-slash')){
        showPassword.classList.remove('fa-eye-slash');
    }
    else{
        showPassword.classList.add('fa-eye-slash');
    }
})

let submit = document.getElementById('submit');
submit.addEventListener('click', () => {
    // e.preventDefault();
    console.log('clicked submit');
    
    if(validemail && validpassword && validappPasword && validfirstname && validlname) {
        console.log('submitting form');
        // location.href = "https://www.google.com/";
    }
    else {
        if(validfirstname == false){
            firstname.classList.add('is-invalid');
        }
        if(validlname == false){
            lastname.classList.add('is-invalid');
        }
        if(validemail == false){
            email.classList.add('is-invalid');
        }
        if(validappPasword == false){
            apppasword.classList.add('is-invalid');
        }
        if(validpassword == false){
            password.classList.add('is-invalid');
        }
        console.log('something is not right please try again');
    }
})
