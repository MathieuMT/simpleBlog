<?php $this->title = "Jean Forteroche - " . $post['title']; ?>

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

<form method="post" action="index.php?action=comment">
    <input id="author" name="author" type="text" placeholder="Votre pseudo" required /><br />
    <textarea id="commentText" name="content" row="4" placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $post['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>

