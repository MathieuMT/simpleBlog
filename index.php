<?php
// Data access link:
require 'Model.php';


try {
    // Call the function that displays all posts in descending of dates:
    $posts = getPosts();

    // Access link to display the homeView.php:
    require 'homeView.php';
}
catch (Exception $e) {
    $errorMsg = $e->getMessage();
    require 'errorView.php';
}



