var btnUpdateSignature = document.querySelector('.btn_update_electronic_signature_profile');
var popupUpdateSignature = document.querySelector('.popup_update_electronic_signature_profile');
var crossUpdateSignature = document.querySelector('.btn_closePopupSignatureElectronic');


btnUpdateSignature.addEventListener('click', function() {
    btnUpdateSignature.style.display = 'none';
    popupUpdateSignature.style.display = 'flex';
})

crossUpdateSignature.addEventListener('click', function() {
    btnUpdateSignature.style.display = 'flex';
    popupUpdateSignature.style.display = 'none';
})