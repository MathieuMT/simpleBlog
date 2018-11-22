<!-- Home view -->
<?php $this->title = 'Jean Forteroche'; ?>


<?php foreach ($posts as $post): ?>
    <article>
        <header>
            <a href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>"><h1 class="postTitle"><?= $post['title'] ?></h1>
            </a>
            <time><?= $post['creation_date_fr'] ?></time>
        </header>
            <p><?= $post['content'] ?></p>
            <p><?= $post['author'] ?></p>
            <p class="nbComs"><?= $post['nb_comments'] ?> Commentaire(s)</p>
    </article>
    <hr />
<?php endforeach; ?>



         