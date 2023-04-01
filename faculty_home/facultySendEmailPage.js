let validDepartment = false;
let validSemester = false;
let validBatch = false;
let validLink = false;

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

sendBtn.addEventListener('click', () => {
    // e.preventDefault();
    console.log('clicked submit');

    if (validLink && validBatch && validDepartment && validSemester) {
        console.log('submitting form');
        function runPyScript(input){
            var jqXHR = $.ajax({
                type: "POST",
                url: "/acceesing.py",
                async: false,
                data: { param: input }
            });
        
            return jqXHR.responseText;
        }
        
    }
    else {
        console.log('something is not right please try again');
    }
})