tinymce.init({
    selector: "textarea.mytinymce",
    
    height: "650px",
    
   
    menubar: "insert",
    
    paste_data_images: true,
    
    plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak","media","searchreplace wordcount visualblocks visualchars code fullscreen","insertdatetime media nonbreaking save table contextmenu directionality","emoticons template paste textcolor colorpicker textpattern"],
    
    image_advtab: true,
    
    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect | link image",
    
    
    toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
    
    
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
    
    language: "fr_FR"


});