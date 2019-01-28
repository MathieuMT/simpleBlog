var btnNickname = document.querySelector('.btn_update_nickname_profile');
var popupNickname = document.querySelector('.popup_update_nickname_profile');
var crossNickname = document.querySelector('.btn_closePopupNickname');


btnNickname.addEventListener('click', function() {
    btnNickname.style.display = 'none';
    popupNickname.style.display = 'flex';
})

crossNickname.addEventListener('click', function() {
    btnNickname.style.display = 'flex';
    popupNickname.style.display = 'none';
})