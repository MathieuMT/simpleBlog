<!-- admin post view -->
<?php $this->title = "Jean Forteroche - ADMINISTRATION / GESTION DES CHAPITRES"; ?>


<?php
if (isset($_SESSION['id']) && $_SESSION['role'] === '2') {
?>

<p><u><h3 class="titre_gestion_blog">GESTION DES CHAPITRES</h3></u></p>

<div id="posts">
    
    <fieldset><u>LISTE DES CHAPITRES À GÉRER:</u><br /><br />
    
        <fieldset>
           
            <label for="addNewPost">Ajouter un nouveau chapitre: </label><br /><br />
            
            <button type="submit" class="btn_addNewPost" id="addNewPost"><i class="far fa-newspaper"></i></button><br /><br />
      
             <div class="popupNewPost">
               
                <p><span class="btn_closePopupNewPost">&times;</span></p>
                
                <h4><u>AJOUT D'UN NOUVEAU CHAPITRE</u></h4>
                
                <form method="POST" action="index.php?action=formAddNewPost">
                   
                    <label class="label_author_new_post" for="author">Auteur du chapitre : </label> 
                        
                    <input type="text" id="author" class="input_field " name="author" placeholder="Pseudo de l'auteur" autofocus/><br /><br />
                        
                    <label class="label_title_new_post" for="title">Titre du chapitre : </label> 
                        
                    <input type="text" id="title" class="input_field " name="title" placeholder="Titre de l'article" /><br /><br />
                        
                    <label class="label_content_new_post" for="content">Nouveau chapitre : </label><br /><br /> 
                       
                    <textarea class="textarea_new_post mytinymce" id="content" name="content" placeholder="Ajouter le contenu de votre article ici !..."></textarea><br />
                    
                    <label for="submit_add_new_post">Ajouter le chapitre : </label><br />
                    
                    <button type="submit" name="submit_add_new_post" class="btn_submit_add_new_post" id="submit_add_new_post"><i class="fas fa-plus"></i></button>
                    
                </form>
                 
             </div> 
       
        </fieldset><br />
    
        

        <?php foreach ($posts as $post): ?>
                
            <form method="post" action="index.php?action=deletePost" id="form_adminPost" class="form_adminPost">

                <fieldset><h1 class="postTitle"><?= $post['title'] ?></h1> <p>créé le : <i><time><?= $post['creation_date_fr'] ?></time></i></p>
                    
                    <article>
                        <p><?= $post['content'] ?></p>
                        <p><?= $post['author'] ?></p>
                        <p class="nbComs"><?= $post['nb_comments'] ?> Commentaire<?php if($post['nb_comments'] > 1) echo 's';?></p>
                    </article>
                    
                    <hr />
                    
                    <label for="updatePost">Modifier le chapitre: </label><br />
            
                    <a href="index.php?action=updatePost&amp;id=<?= $post['id'] ?>" ><button type="button" class="btn_updatePost" id="updatePost"><i class="far fa-edit"></i></button></a><br /><br />
                    
                    <hr />
                    
                    <label for="deletePost">Supprimer le chapitre: </label><br />
                    
                    <input type="hidden" name="postId" value="<?php echo intval($post['id']); ?>" />
            
                    <button type="submit" name="submit_delete_post" class="btn_submit_delete_Post" id="deletePost"><i class="fas fa-trash-alt"></i></button><br /><br />
                    
                    <hr />
                    
                </fieldset><br />
                
            </form>

        <?php endforeach; ?>    

       
        
    </fieldset>
    
</div>



<?php
}
?>



