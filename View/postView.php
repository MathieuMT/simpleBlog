<!-- post view -->
<?php $this->title = "Jean Forteroche - " . $post['title']; ?>

<?php

if (isset($_SESSION['id'])) {
?>
<fieldset>
    <article>
        <header>
            <h1 class="postTitle"><?= $post['title'] ?></h1>
            <time><?= $post['creation_date_fr'] ?></time>
        </header>
        <p><?= $post['content'] ?></p>
        <p><?= $post['author'] ?></p>
    </article>
</fieldset>
<hr />
<header>
   <i><u><h1 id="titleAnswers">Répondre à <?= $post['author'] ?> à propos de son article "<?= $post['title'] ?>": </h1></u></i>
</header>
<?php foreach ($comments as $comment): ?>
   
    <div id="comments" name="comments">
        <fieldset>
            <p><b><i>Le <?= $comment['comment_date_fr'] ?><br /><br /><u><?= $comment['author'] ?> a dit:</u><br /></i></b><br /><i>" <?= $comment['comment'] ?> "</i></p><p><a href="index.php?action=flagComment&amp;commentId=<?= $comment['id'] ?>&amp;id=<?= $_GET['id']; ?>" ><form method="get" action="index.php?action=flagComment&amp;commentId=<?= $comment['id'] ?>&amp;id=<?= $_GET['id']; ?>"><input type="button" value="Signaler le commentaire" /><input type="hidden" name="id" value="<?= $post['id'] ?>" /></form></a></p><br />
        </fieldset><br />
    </div>
    
<?php endforeach; ?>
<div id="formComment">
    <form method="post" action="index.php?action=comment" id="formCommentPost">
        <input id="author" name="author" type="text" placeholder="Votre pseudo" required /><br />
        <textarea id="commentText" name="content" row="4" placeholder="Votre commentaire ici ..." required></textarea><br />
        <input type="hidden" name="id" value="<?= $post['id'] ?>" />
        <input type="submit" id='btn_submit_comment' name="btn_submit_comment" class="btn_comment" value="Commenter" />
    </form>
</div>
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


<button class="btn_commentPost" >Commenter le chapitre: <?= '\'' . $post['title'] . '\'' ?> -></button><br />
    
<div class="popup">
    <p><span class=btn_closePopup>&times;</span></p>
    <p class="txt_popup">Pour commenter le chapitre <?= '\'' . $post['title'] . '\'' ?> vous devez vous connecter !</p>
    <a class="link_popup" href="index.php?action=showFormConnexionFromPost&amp;id=<?= $post['id'] ?>" ><form method="get" action="index.php?action=showFormConnexionFromPost&amp;id="<?= $post['id'] ?>><input class="btn_popup" type="button" value="Se Connecter ici !" /><input type="hidden" name="id" value="<?= $post['id'] ?>" /></form></a>
</div>

<script src="Content/JS/btn_commentPost.js"></script>
<?php
}
?>





<!-- 
<script>refresh_comment()</script> 
<script type="text/javascript" src="Content/JS/refresh_comments.js"></script> 
-->
