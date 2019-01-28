var btnEmail = document.querySelector('.btn_update_email_profile');
var popupEmail = document.querySelector('.popup_update_email_profile');
var crossEmail = document.querySelector('.btn_closePopupEmail');


btnEmail.addEventListener('click', function() {
    btnEmail.style.display = 'none';
    popupEmail.style.display = 'flex';
})

crossEmail.addEventListener('click', function() {
    btnEmail.style.display = 'flex';
    popupEmail.style.display = 'none';
})