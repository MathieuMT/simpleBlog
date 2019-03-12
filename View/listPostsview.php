<!-- listPosts view -->
<?php $this->title = 'Jean Forteroche - LES ARTICLES'; ?>


<?php foreach ($posts as $post): ?>

<?php 

// CUTTING THE END OF THE EXTRACT WITH A SPACE:
$extract = $post['extract'];
//var_dump($extract);

$space = strrpos($extract, ' ');
//var_dump($space);

$extractWithSpace = substr($extract,0,$space);
//var_dump($extractWithSpace);

?>
<fieldset>
    <article>
        <header>
            <a href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>"><h1 class="postTitle"><?= $post['title'] ?></h1>
            </a>
            <time><?= $post['creation_date_fr'] ?></time>
        </header>
        <p><?= $extractWithSpace ?> ...</p><p><a id="link_totalPost" href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>"><button id="btn_totalPost">Lire la suite de l'article et le commenter:
->...</button></a></p>
            <p class="nbComs"><?= $post['nb_comments'] ?> Commentaire<?php if($post['nb_comments'] > 1) echo 's';?></p>
    </article>
</fieldset>
    <hr />
<?php endforeach; ?>



 
        
                      