var openMenu = document.querySelector('.open-menu');
var headerMenu = document.querySelector('.header-menu');

openMenu.addEventListener('click', toggleOpen);
function toggleOpen(){
    headerMenu.classList.toggle('open');
    this.classList.toggle('on');
}