let email = document.getElementById('email');
let validemail = false;
let validpassword = false;
let validDepartment = false;
let validSemester = false;
let validBatch = false;
let validfirstname = false;
let validlastname = false;

firstname.addEventListener('blur', () => {

    let str = firstname.value;
    if (str != "") {
        firstname.classList.remove('is-invalid');
        validfirstname = true;
    }
    else {
        firstname.classList.add('is-invalid');
        validfirstname = false;
    }
})

lastname.addEventListener('blur', () => {

    let str = lastname.value;
    if (str != "") {
        lastname.classList.remove('is-invalid');
        validlastname = true;
    }
    else {
        lastname.classList.add('is-invalid');
        validlastname = false;
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

password.addEventListener('blur', () => {

    let str = password.value;
    if (str != "") {
        password.classList.remove('is-invalid');
        validpassword = true;
    }
    else {
        password.classList.add('is-invalid');
        validpassword = false;
    }
})

department.addEventListener('blur', () => {
    let str = department.value;
    if (str != "None") {

        department.classList.remove('is-invalid');
        validDepartment = true;
    }
    else {
        department.classList.add('is-invalid');
        validDepartment = false;
    }
})

semester.addEventListener('blur', () => {
    let str = semester.value;
    if (str != "None") {
        semester.classList.remove('is-invalid');
        validSemester = true;
    }
    else {
        semester.classList.add('is-invalid');
        validSemester = false;
    }
})

batch.addEventListener('blur', () => {
    let str = batch.value;
    if (str != "None") {

        batch.classList.remove('is-invalid');
        validBatch = true;
    }
    else {

        batch.classList.add('is-invalid');
        validBatch = false;
    }
})

const showPassword = document.querySelector('#show-password');
const passwordFeild = document.querySelector('#password');
showPassword.addEventListener("click", () => {
    let type = passwordFeild.getAttribute("type") === "password" ? "text" : "password";
    passwordFeild.setAttribute("type", type);
    if (showPassword.classList.contains('fa-eye-slash')) {
        showPassword.classList.remove('fa-eye-slash');
    }
    else {
        showPassword.classList.add('fa-eye-slash');
    }
})

let submit = document.getElementById('submit');
submit.addEventListener('click', () => {
    // e.preventDefault();
    console.log('clicked submit');

    if (validemail && validpassword && validBatch && validDepartment && validSemester && validfirstname && validlastname) {
        console.log('submitting form');
        // location.href = "https://www.google.com/";
    }
    else {
        console.log('something is not right please try again');
    }
})  
