<?php
// Data access link:
require 'Model.php';


try {
    // Call the function that displays all posts in descending of dates:
    $posts = getPosts();

    // Access link to the display:
    require 'homeView.php';
}
catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}



