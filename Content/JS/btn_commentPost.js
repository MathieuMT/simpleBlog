var btn2 = document.querySelector('.btn_commentPost');
var popup = document.querySelector('.popup');
var cross = document.querySelector('.btn_closePopup');


btn2.addEventListener('click', function() {
    btn2.style.display = 'none';
    popup.style.display = 'flex';
})

cross.addEventListener('click', function() {
    btn2.style.display = 'block';
    popup.style.display = 'none';
})

