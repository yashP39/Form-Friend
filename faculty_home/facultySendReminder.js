let validDepartment = false;
let validSemester = false;
let validBatch = false;
let validLink = false;
let validGsheet = false;
let validSsheet = false;

googleSheet.addEventListener('blur', () => {

    let str = googleSheet.value;
    if (str != "") {
        googleSheet.classList.remove('is-invalid');
        validSsheet = true;
    }
    else {
        googleSheet.classList.add('is-invalid');
        validSsheet = false;
    }
})

subSheet.addEventListener('blur', () => {

    let str = subSheet.value;
    if (str != "") {
        subSheet.classList.remove('is-invalid');
        validGsheet = true;
    }
    else {
        subSheet.classList.add('is-invalid');
        validGsheet = false;
    }
})

link.addEventListener('blur', () => {
    let reglink = /^https:\/\/docs.google.com/;
    let str = link.value;
    if (reglink.test(str)) {
        console.log('valid link');
        link.classList.remove('is-invalid');
        validLink = true;
    }
    else {
        console.log('not valid link');
        link.classList.add('is-invalid');
        validLink = false;
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

sendBtn.addEventListener('click', (e) => {
    f.preventDefault();
    console.log('clicked submit');

    if (validLink && validBatch && validDepartment && validSemester && validGsheet && validSsheet) {
        console.log('submitting form');
        
    }
    else {
        if(validGsheet == false){
            googleSheet.classList.add('is-invalid');
        }
        if(validSsheet == false){
            subSheet.classList.add('is-invalid');
        }
        if(validLink == false){
            link.classList.add('is-invalid');
        }
        if(validDepartment == false){
            department.classList.add('is-invalid');
        }
        if(validSemester == false){
            semester.classList.add('is-invalid');
        }
        if(validBatch == false){
            batch.classList.add('is-invalid');
        }
        console.log('something is not right please try again');
    }
})

followupBtn.addEventListener('click', () => {
    // e.preventDefault();
    console.log('clicked submit');

    if (validLink && validBatch && validDepartment && validSemester && validGsheet && validSsheet) {
        console.log('submitting form');
    }
    else {
        if(validGsheet == false){
            googleSheet.classList.add('is-invalid');
        }
        if(validSsheet == false){
            subSheet.classList.add('is-invalid');
        }
        if(validLink == false){
            link.classList.add('is-invalid');
        }
        if(validDepartment == false){
            department.classList.add('is-invalid');
        }
        if(validSemester == false){
            semester.classList.add('is-invalid');
        }
        if(validBatch == false){
            batch.classList.add('is-invalid');
        }
        console.log('something is not right please try again');
    }
})
