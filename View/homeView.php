<!-- Home view -->
<?php $this->title = 'Jean Forteroche - ACCUEIL'; ?>

<?php
if (isset($_SESSION['id'])) {
    echo'<p>Bonjour ' . $_SESSION['nickname'] . ' , je vous souhaite la bienvenue sur mon blog !</p>';
    
} else {
    echo '<p>Bienvenue sur mon blog !</p>';
}

?>


<?php foreach ($posts as $post): ?>

<?php 

// CUTTING THE END OF THE EXTRACT WITH A SPACE:
$extract = $post['extract'];

$space = strrpos($extract, ' ');

$extractWithSpace = substr($extract,0,$space);

?>
   
    <article>
        <header>
            <a href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>"><h1 class="postTitle"><?= $post['title'] ?></h1>
            </a>
            <time><?= $post['creation_date_fr'] ?></time>
        </header>
        <p><?= $extractWithSpace ?> ...</p><p><a id="link_totalPost" href="<?= "index.php?action=post&amp;id=" . $post['id'] ?>"><button id="btn_totalPost">Lire la suite du chapitre et le commenter:
->...</button></a></p> 
            <p><?= $post['author'] ?></p>
            <p class="nbComs"><?= $post['nb_comments'] ?> Commentaire<?php if($post['nb_comments'] > 1) echo 's';?></p>
    </article>
    <hr />
<?php endforeach; ?>



 