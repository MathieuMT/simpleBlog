<?php

require 'Model.php';

// Display the list of all blog posts:
function home() {
    $posts = getPosts();
    require 'homeView.php';
}

// Displays post destails:
function post($postId) {
    $post = getPost($postId);
    $comments = getComments($postId);
    require 'postView.php';
}

// Display an error:
function error($errorMsg) {
    require 'errorView.php';
}