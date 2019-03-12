<!-- admin comments flagged view -->
<?php $this->title = "Jean Forteroche - ADMINISTRATION / GESTION DES COMMENTAIRES"; ?>


<?php
if (isset($_SESSION['id']) && $_SESSION['role'] === '2') {
?>

<p><u><h3 class="titre_gestion_blog">GESTION DES COMMENTAIRES SIGNALÉS</h3></u></p>

<div id="comments">
    
    <fieldset><u>LISTE DES COMMENTAIRES À MODÉRER:</u><br /><br />
    
        
    
            <?php foreach ($flag as $f): ?>

                <div id="comments" name="comments">
                    <fieldset>
                        <p><b><i>Le <?= $f['comment_date_fr'] ?><br /><br /><u><?= $f['author'] ?> a dit:</u><br /></i></b><br /><i>" <?= $f['comment'] ?> "</i></p><p>À propos du chapitre: <?= $f['title'] ?></p><p><a href="index.php?action=approveFlaggedComment&amp;commentId=<?= $f['id'] ?>&amp;id=<?= $_GET['id']; ?>" ><form method="get" action="index.php?action=approveFlaggedComment&amp;commentId=<?= $f['id'] ?>&amp;id=<?= $_GET['id']; ?>"><input type="button" value="Approuver le commentaire" /><input type="hidden" name="id" value="<?= $post['id'] ?>" /></form></a></p><p><a href="index.php?action=deleteFlaggedComment&amp;commentId=<?= $f['id'] ?>&amp;id=<?= $_GET['id']; ?>" ><form method="get" action="index.php?action=deleteFlaggedComment&amp;commentId=<?= $f['id'] ?>&amp;id=<?= $_GET['id']; ?>"><input type="button" value="Supprimer le commentaire" /><input type="hidden" name="id" value="<?= $post['id'] ?>" /></form></a></p><br />
                    </fieldset><br />
                </div>

            <?php endforeach; ?>

         

       
        
    </fieldset>
    
</div>



<?php
}
?>



