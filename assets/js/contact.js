document.querySelector('#contact-form').addEventListener('submit', submitContact);
var toastError = document.querySelector('.toast-error');


function submitContact(ev){
    var form = this.elements;
    var errors = [];
    var mailformat = /^[\w\.\-\+]+@[\w\.\-]+\.[a-z]{2,5}$/;
    var phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/;
    var phoneInput = form['phone-number'];

    if(form['full-name'].value === ''){
        errors.push("<span> Full name required </span>");
    }

    if(form['email'].value === '' || !form['email'].value.match(mailformat)){
        errors.push("<span> Valid email required </span>");
    }

    if(phoneInput.value === '' || !phoneRegex.test(phoneInput.value)){
        errors.push("<span> Phone number <br /> required </span>");
    }

    if(form['query'].value === ''){
        errors.push("<span> Query required </span>");
    }

    if(form['message'].value === ''){
        errors.push("<span> Message required </span>");
    }

    if (errors.length > 0) {
        ev.preventDefault();
        toastError.innerHTML = errors.join('<br />')
        toastError.classList.add('show');
        setTimeout(timeOut, 5000)
        return;
    }

    return true;
}

function timeOut(){
    toastError.classList.remove('show');
}