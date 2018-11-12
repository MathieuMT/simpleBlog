<?php

require 'Model/Model.php';

// Display the list of all blog posts:
function home() {
    $posts = getPosts();
    require 'View/homeView.php';
}

// Displays post destails:
function post($postId) {
    $post = getPost($postId);
    $comments = getComments($postId);
    require 'View/postView.php';
}

// Display an error:
function error($errorMsg) {
    require 'View/errorView.php';
}