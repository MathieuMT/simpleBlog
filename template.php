<!-- Template -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title><?= $title ?></title><!-- Specifique element -->
    </head>
    <body>
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
    </body>
</html>