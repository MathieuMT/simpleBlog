var btnPass = document.querySelector('.btn_update_pass_profile');
var popupPass = document.querySelector('.popup_update_pass_profile');
var crossPass = document.querySelector('.btn_closePopupPass');


btnPass.addEventListener('click', function() {
    btnPass.style.display = 'none';
    popupPass.style.display = 'flex';
})

crossPass.addEventListener('click', function() {
    btnPass.style.display = 'flex';
    popupPass.style.display = 'none';
})