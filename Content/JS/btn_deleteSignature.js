var btnDeleteSignature = document.querySelector('.btn_delete_electronic_signature_profile');
var popupDeleteSignature = document.querySelector('.popup_delete_electronic_signature_profile');
var crossDeleteSignature = document.querySelector('.btn_closePopupDeletetSignatureElectronic');


btnDeleteSignature.addEventListener('click', function() {
    btnDeleteSignature.style.display = 'none';
    popupDeleteSignature.style.display = 'flex';
})

crossDeleteSignature.addEventListener('click', function() {
    btnDeleteSignature.style.display = 'flex';
    popupDeleteSignature.style.display = 'none';
})

