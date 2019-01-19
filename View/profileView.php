<!-- profile View -->

<?php $this->title = 'Jean Forteroche - PROFIL'; ?>


<?php

if (isset($_SESSION['nickname'])) {
?>


<div class="profileMember">
    
    <p><h3>Profil de : "<?= $profile['nickname'] ?>"</h3><br /> Vous êtes inscrit en tant que <u><?= $profile['role'] ?></u>  depuis le <i><?= $profile['registration_date_fr'] ?></i> sur le site Jean FORTEROCHE.</p>
    
</div>

<?php
}
?>
