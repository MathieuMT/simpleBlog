<!-- Home view -->
<?php $title = 'Jean Forteroche'; ?>

<?php ob_start(); ?>           
<?php foreach ($posts as $post): ?>
    <article>
        <header>
            <a href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>">    <h1 class="postTitle"><?= $post['title'] ?>    </h1>
            </a>
            <time><?= $post['creation_date_fr'] ?></time>
        </header>
            <p><?= $post['content'] ?></p>
            <p><?= $post['author'] ?></p>
            <?php
                // Access to the database:
                $db = getDb();
                // Counting comments with joins between posts and comments tables:
                $req = $db->query('SELECT p.id, p.title, p.content, p.author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr, COUNT(c.post_id) AS nb_comments FROM posts AS p LEFT JOIN comments AS c ON c.post_id = p.id WHERE p.id = ' . $post['id'] . ' GROUP BY post_id ORDER BY creation_date DESC');
                $data = $req->fetch(); 
            ?>
            <p class="nbComs"><?= $data['nb_comments'] ?> Commentaire(s)</p>
    </article>
    <hr />
<?php endforeach; ?>
<?php $content = ob_get_clean(); ?>

<?php require 'View/template.php'; ?>            