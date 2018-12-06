const btn = document.querySelector('.btn_nav');
const nav = document.querySelector('.nav');
            
btn.addEventListener('click', function() {
    nav.classList.toggle('open');
})