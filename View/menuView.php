<!-- Menu view -->
<?php
if (isset($_SESSION['nickname'])) {
?>
    <header class="header">
    <div class="header-top">
        <div class="logo"><h3><?= $title ?></h3></div>
        <div class="btn-menu">
            <button class="btn_nav">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    <nav class="nav">
        <a href="index.php?action=home">Accueil</a>
        <a href="index.php?action=showPosts">Les articles</a>
        <a href="index.php?action=showFormRegistration">Inscription</a>
        <a href="index.php?action=logout">Déconnexion</a>
    </nav>
</header>
<?php
} else {
?>
    <header class="header">
    <div class="header-top">
        <div class="logo"><h3><?= $title ?></h3></div>
        <div class="btn-menu">
            <button class="btn_nav">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    <nav class="nav">
        <a href="index.php?action=home">Accueil</a>
        <a href="index.php?action=showPosts">Les articles</a>
        <a href="index.php?action=showFormRegistration">Inscription</a>
        <a href="index.php?action=showFormConnexion">Connection</a>
    </nav>
</header>
<?php
}
?>


