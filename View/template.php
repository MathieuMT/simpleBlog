<!-- Template -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Content/CSS/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script type="text/javascript" src='https://cloud.tinymce.com/5/tinymce.min.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="Content/JS/refresh_comments.js"></script>

        
        <title><?= $title ?></title><!-- Specifique element -->
    </head>
    <body>
       
        <?php  include 'menuView.php'; ?>
        <div id="buffer_block"></div>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="blogTitle">Blog de <br />Jean Forteroche</h1></a>
                
            </header>
            <div id="content">
                <?= $content ?> <!-- Specific element -->
            </div><!-- #content -->
            <footer id="blogFooter">
                Blog réaliser avec PHP, HTML5 et CSS
            </footer>
        </div><!-- #global -->
        
        
        <!-- JAVASCRIPT -->
        <script src="Content/JS/btn_nav.js"></script>
    <!--<script src="Content/JS/btn_commentPost.js"></script> 
        <script src="Content/JS/btn_updateAvatar.js"></script>
        <script src="Content/JS/btn_updateNickname.js"></script>
        <script src="Content/JS/btn_updateEmail.js"></script>
        <script src="Content/JS/btn_updatePass.js"></script>
        <script src="Content/JS/btn_updateSignature.js"></script>
        <script src="Content/JS/btn_deleteSignature.js"></script>
        <script src="Content/JS/btn_addNewPost.js"></script> -->
        
        
        
        <!-- <script src="Content/JS/jquery.min.js"></script> -->
        <script src="Content/plugin/tinymce/js/tinymce/tinymce.min.js"></script>
        <script src="Content/plugin/tinymce/js/tinymce/init-tinymce.js"></script>
        <script src="Content/plugin/tinymce/js/tinymce/langs/fr_FR.js"></script>
        
        
        
    </body>
</html>