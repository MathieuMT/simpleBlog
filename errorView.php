<!-- Error view -->
<?php $title = 'Jean Forteroche' ?>


<?php ob_start() ?>
<p>Une erreur est survenue : <?= $errorMsg ?></p>
<?php $content = ob_get_clean(); ?>


<?php require 'template.php'; ?>