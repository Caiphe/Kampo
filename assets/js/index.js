console.log('Working here');
window.addEventListener('load', loadWindow);

function loadWindow(){
    setTimeout(function(){

        document.querySelector('.call-to-action-one').classList.add('fadeInUp');
        document.querySelector('.call-to-action-two').classList.add('fadeInUp');
        document.querySelector('.call-to-action-three').classList.add('fadeInUp');

    }, 200);
}
