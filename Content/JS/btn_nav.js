var btn = document.querySelector('.btn_nav');
var nav = document.querySelector('.nav');
            
btn.addEventListener('click', function() {
    nav.classList.toggle('open');
})