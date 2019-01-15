<!-- listPosts view -->
<?php $this->title = 'Jean Forteroche'; ?>


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
   
    <article>
        <header>
            <a href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>"><h1 class="postTitle"><?= $post['title'] ?></h1>
            </a>
            <time><?= $post['creation_date_fr'] ?></time>
        </header>
        <p><?= $extractWithSpace ?> ...<a id="link_totalPost" href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>"><input id="btn_totalPost" type="button" value="Lire la suite de l'article: <?= '\''.$post['title'].'\'' ?> ->" /></a>...</p>
            <p><?= $post['author'] ?></p>
            <p class="nbComs"><?= $post['nb_comments'] ?> Commentaire<?php if($post['nb_comments'] > 1) echo 's';?></p>
    </article>
    <hr />
<?php endforeach; ?>



         