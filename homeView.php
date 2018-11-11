<!-- Display -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Jean Forteroche</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="blogTitle">Jean Forteroche</h1></a>
                <p>Je vous souhaite la bienvenue sur mon blog.</p>
            </header>
            <div id="content">
                <?php foreach ($posts as $post): ?>
                    <article>
                        <header>
                            <h1 class="postTitle"><?= $post['title'] ?></h1>
                            <time><?= $post['creation_date_fr'] ?></time>
                        </header>
                        <p><?= $post['content'] ?></p>
                        <p><?= $post['author'] ?></p>
                        <?php
                            // Counting comments with joins between posts and comments tables:
                            $req = $db->query('SELECT p.id, p.title, p.content, p.author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, COUNT(c.post_id) AS nb_comments FROM posts AS p LEFT JOIN comments AS c ON c.post_id = p.id WHERE p.id = ' . $post['id'] . ' GROUP BY post_id ORDER BY creation_date DESC');
                            $data = $req->fetch(); 
                        ?>
                        <p class="nbComs"><?= $data['nb_comments'] ?> Commentaire(s)</p>
                    </article>
                    <hr />
                <?php endforeach; ?>
            </div><!-- #content -->
            <footer id="blogFooter">
                Blog réaliser avec PHP, HTML5 et CSS
            </footer>
        </div><!-- #global -->
    </body>
</html>