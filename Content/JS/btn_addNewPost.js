var btnAddNewPost = document.querySelector('.btn_addNewPost');
var popupNewPost = document.querySelector('.popupNewPost');
var crossNewPost = document.querySelector('.btn_closePopupNewPost');


btnAddNewPost.addEventListener('click', function() {
    btnAddNewPost.style.display = 'none';
    popupNewPost.style.display = 'flex';
})

crossNewPost.addEventListener('click', function() {
    btnAddNewPost.style.display = 'flex';
    popupNewPost.style.display = 'none';
})