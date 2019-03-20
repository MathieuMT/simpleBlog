<!-- Template -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />

        <title><?= $title ?></title><!-- Specifique element -->

        <!--CSS-->
        <link rel="stylesheet" href="Content/CSS/style.css" />

        <!--responsive-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--TinyMCE-->
        <script src="Content/plugin/tinymce/js/tinymce/tinymce.min.js"></script>
        
        
        <!--FontAwesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        
        
        
    </head>
    <body>
       
        <?php  include 'menuView.php'; ?>
        
        <div class="buffer_block"></div>
        
        <div id="global">
            
            <header>
            
               <div id="banniere-image"><a href="index.php"><h1 id="blogTitle">Blog de <br />Jean Forteroche</h1></a><br /><br /><br /><span id="title-book"><h3>"Billet simple pour l'Alaska"</h3></span></div>  
                 
            </header>    
                
            
            <div id="content">
                <?= $content ?> <!-- Specific element -->
            </div><!-- #content -->
            
            <footer id="blogFooter">
                *
                <hr />
                <p>Blog réaliser avec PHP, HTML5, CSS, JS, Jquery, TinyMCE</p>
                <p>©copyright MathieuMT</p>
                <hr />
                *
            </footer>
        </div><!-- #global -->
        
        
        <!-- JAVASCRIPT -->
        <script src="Content/JS/btn_nav.js"></script>
        
        
    </body>
</html>