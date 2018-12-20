<!-- Template -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="Content/style.css" />
        
        <title><?= $title ?></title><!-- Specifique element -->
    </head>
    <body>
       
        <?php  include 'menuView.php'; ?>
        <div id="buffer_block"></div>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="blogTitle">Jean Forteroche</h1></a>
                <p>Je vous souhaite la bienvenue sur mon blog.</p>
            </header>
            <div id="content">
                <?= $content ?> <!-- Specific element -->
            </div><!-- #content -->
            <footer id="blogFooter">
                Blog réaliser avec PHP, HTML5 et CSS
            </footer>
        </div><!-- #global -->
        
        <script src="Content/btn_nav.js"></script>
    </body>
</html>