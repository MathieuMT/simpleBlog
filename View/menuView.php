<!-- Menu view -->
<?php
if (isset($_SESSION['nickname']) && $_SESSION['role'] == 'administrateur') {
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
    <nav class="navigation">
        <ul class="nav">
            <li class="nav-item"><a href="index.php?action=home">Accueil</a></li>
            <li class="nav-item"><a href="index.php?action=showPosts">Articles</a></li>
            <li class="nav-item"><a href="index.php?action=showProfile&amp;id=<?= $_SESSION['id'] ?>">Profil</a></li>
            <li class="nav-item has-children"><span>Administration</span>
                <ul class="nav-sub">
                    <li class="nav-item-sub"><a href="index.php?action=showAdmin&amp;id=<?= $_SESSION['id'] ?>">Gestion des articles</a></li>
                    <li class="nav-item-sub"><a href="index.php?action=showAdmin&amp;id=<?= $_SESSION['id'] ?>">Gestion des utilisateurs</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="index.php?action=showFormRegistration">Inscription</a></li>
            <li class="nav-item"><a href="index.php?action=logout">Déconnexion</a></li>
        </ul>
    </nav>
</header>
<?php
}else if (isset($_SESSION['nickname']) && $_SESSION['role'] == 'membre') {
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
    <nav class="navigation">
        <ul class="nav">
            <li class="nav-item"><a href="index.php?action=home">Accueil</a></li>
            <li class="nav-item"><a href="index.php?action=showPosts">Articles</a></li>
            <li class="nav-item"><a href="index.php?action=showProfile&amp;id=<?= $_SESSION['id'] ?>">Profil</a></li>
            <li class="nav-item"><a href="index.php?action=showFormRegistration">Inscription</a></li>
            <li class="nav-item"><a href="index.php?action=logout">Déconnexion</a></li>
        </ul>
    </nav>
</header>
<?php    
}else {
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
    <nav class="navigation">
        <ul class="nav">
            <li class="nav-item"><a href="index.php?action=home">Accueil</a></li>
            <li class="nav-item"><a href="index.php?action=showPosts">Articles</a></li>
            <li class="nav-item"><a href="index.php?action=showFormRegistration">Inscription</a></li>
            <li class="nav-item"><a href="index.php?action=showFormConnexion">Connection</a></li>
        </ul>
    </nav>
</header>
<?php
}
?>


