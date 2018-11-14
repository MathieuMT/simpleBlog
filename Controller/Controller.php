<?php

require 'Model/Model.php';

// Display the list of all blog posts:
function home() {
    $modelManager = new Model(); // Creation of the Model object $modelManager
    $posts = $modelManager->getPosts();// Call the getPosts() function of this object $modelManager
    require 'View/homeView.php';
}

// Displays post destails:
function post($postId) {
    $modelManager = new Model(); // Creation of the Model object $modelManager
    $post = $modelManager->getPost($postId); // Call the getPost() function of this object $modelManager
    $comments = $modelManager->getComments($postId); // Call the getComments() of this object $modelManager
    require 'View/postView.php';
}

// Display an error:
function error($errorMsg) {
    require 'View/errorView.php';
}