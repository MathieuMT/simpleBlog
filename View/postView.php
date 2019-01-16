<?php $this->title = "Jean Forteroche - " . $post['title']; ?>

<?php

if (isset($_SESSION['nickname'])) {
?>
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
<?php
}else {
?>

    <article>
    <header>
        <h1 class="postTitle"><?= $post['title'] ?></h1>
        <time><?= $post['creation_date_fr'] ?></time>
    </header>
    <p><?= $post['content'] ?></p>
    <p><?= $post['author'] ?></p>
</article>
<hr />


<button class="btn_commentPost" >Commenter l'article: <?= '\'' . $post['title'] . '\'' ?> -></button><br />
    
<div class="popup">
    <p><span class=btn_closePopup>&times;</span></p>
    <p class="txt_popup">Pour commenter l'article <?= '\'' . $post['title'] . '\'' ?> vous devez vous connecter !</p>
    <button class="btn_popup"><a class="link_popup" href="index.php?action=showFormConnexion">Se Connection</a></button>
</div>


<?php
}
?>


