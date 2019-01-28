const btn2 = document.querySelector('.btn_commentPost');
const popup = document.querySelector('.popup');
const cross = document.querySelector('.btn_closePopup');


btn2.addEventListener('click', function() {
    btn2.style.display = 'none';
    popup.style.display = 'flex';
})

cross.addEventListener('click', function() {
    btn2.style.display = 'block';
    popup.style.display = 'none';
})

