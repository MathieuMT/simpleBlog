<!-- admin update post view -->
<?php $this->title = "Jean Forteroche - ADMINISTRATION / GESTION DES ARTICLES / MODIFICATION DE L'ARTICLE"; ?>

<?php
if (isset($_SESSION['id']) && $_SESSION['role'] === '2') {
?>

<fieldset>
            
            
    <h1 class="postTitle"><?= $post['title'] ?></h1> créé le : <i><time><?= $post['creation_date_fr'] ?></time></i>

        <article>
            <p><?= $post['content'] ?></p>
            <p><?= $post['author'] ?></p>
        </article>

    <hr />

    <div class="popupUpdatePost">

        <h4><u>MODIFICATION DE L'ARTICLE</u></h4>

        <form method="POST" action="index.php?action=formUpdatePost"  class="formUpdatePost">

            <label class="label_author_update_post" for="author">Modifier l'auteur de l'article : </label><br /> 

            <input type="text" id="author" class="input_field update_author" name="author" value="<?= htmlspecialchars($post['author']) ?>" autofocus/><br /><br />

            <label class="label_title_update_post" for="title">Modifier le titre de l'article : </label><br /> 

            <input type="text" id="title" class="input_field update_title" name="title" value="<?= htmlspecialchars($post['title']) ?>" /><br /><br />

            <label class="label_content_new_post" for="content">Modifier l'article : </label><br /><br /> 

            <textarea class="textarea_update_post mytinymce" id="content" name="content"><?= htmlspecialchars($post['content']) ?></textarea><br />
                            
            <input type="hidden" name="postId" value="<?php echo intval($_GET['id']); ?>" />

            <label for="submit_update_post">Modifier l'article : </label><br />

            <button type="submit" name="submit_update_post" class="btn_submit_update_post" id="submit_update_post"><i class="fas fa-undo-alt"></i></button><br /><br />

        </form>

    </div>

</fieldset><br />

<?php
}
?>






