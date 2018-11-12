<?php $title = "Jean Forteroche - " . $post['title']; ?>


<?php ob_start(); ?>
<article>
    <header>
        <h1 class="postTitle"><?= $post['title'] ?></h1>
        <time><?= $post['creation_date_fr'] ?></time>
    </header>
    <p><?= $post['content'] ?></p>
    <p><?= $post['author'] ?></p>
</article>
<hr />
<header>
    <h1 id="titleAnswers">Réponse à <?= $post['title'] ?></h1>
</header>
<?php foreach ($comments as $comment): ?>
    <p><?= $comment['author'] ?> dit :</p>
    <p><?= $comment['comment'] ?></p>
<?php endforeach; ?>
<?php $content = ob_get_clean(); ?>


<?php require 'View/template.php'; ?>