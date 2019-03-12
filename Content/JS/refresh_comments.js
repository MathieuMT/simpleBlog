
/*

$(document).ready(function() {
    
    function refresh_comment(flux) {
        $(comments).val(flux['comments']);
    }
    
    $('#formCommentPost').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            
            url: 'index.php?action=ajax&query=refresh_comments&id=70',
            type: 'post',
            data: $(this).serialize(),
            dataType: 'json'
            
        });
    });
    
    
});

*/














/*
function refresh_comment() {
    
    console.log('chargement');
    $.ajax({
        
        url: 'index.php?action=ajax&query=refresh_comments&id=70',
        context: document.body
    }).done(function(response){
        
        console.log(response);
        
    }) 
 }
*/
















































/*
setInterval('load_comments()', 500);



function load_comments(){
*/
    /* 
    La fonction load() permet de charger le contenu du fichier "load_messages.php" et renvoie le contenu (pseudo et message) dans la div avec l'id="messages" grace à la bibliothèque jQuery:
    */
   /* var postId = $("input#id").val();
    
    $('#comments').load('index.php?action=post&id='postId + '#commentText');
    
   
    
}

*/







//setInterval('load_comments()', 500);


//function load_comments(){
    /* 
    La fonction load() permet de charger le contenu du fichier "load_commentaires.php" et renvoie le contenu (pseudo et message) dans la div avec l'id="commentaires" grace à la bibliothèque jQuery:
    */
    //console.log(window.location.search);
    
   // var query = window.location.search.substring(1);
   // console.log(query);
    
   // var vars = query.split("&"); 
   // console.log(vars);
    
   // var table = [];
   // console.log(table);
    
   // for (var i = 0; i < vars.length ; i++) {
       // var pair = vars[i].split("=");
       // table.push(pair);
   // }
    
       // console.log(table);// on cible le billet actuel donc le parametre billet est toujours en 1er.
        
       // $('#comments').load('index.php?action=post&id='+ table[0][1]);
    
    
    
    
//}


//$(document).ready(function() {
    //$('#btn_submit_comment').click(function() {
        
        
       //location.reload();
        
    //}); 
//});






















