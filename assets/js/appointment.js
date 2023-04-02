document.querySelector('#appointment-form').addEventListener('submit', submitContact);
var toastError = document.querySelector('.toast-error');


function submitContact(ev){
    var form = this.elements;
    var errors = [];
    var phoneInput = form['phone-number'];

    if(form['full-name'].value === ''){
        errors.push("<span> Full name required </span>");
    }

    if(phoneInput.value === ''){
        errors.push("<span> Phone number <br /> required </span>");
    }

    if(form['department'].value === ''){
        errors.push("<span> Department required </span>");
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