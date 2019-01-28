var btnAvatar = document.querySelector('.btn_update_avatar_profile');
var popupAvatar = document.querySelector('.popup_update_avatar_profile');
var crossAvatar = document.querySelector('.btn_closePopupAvatar');


btnAvatar.addEventListener('click', function() {
    btnAvatar.style.display = 'none';
    popupAvatar.style.display = 'flex';
})

crossAvatar.addEventListener('click', function() {
    btnAvatar.style.display = 'flex';
    popupAvatar.style.display = 'none';
})