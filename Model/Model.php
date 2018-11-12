<?php

// Returns a list of all posts, sorted by descending date:
function getPosts() {
    $db = getDb();
    $posts = $db->query('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');
    return $posts;
}

// Make the connextion to the database
// Instantiates and returns the associated PDO object
function getDb() {
    // Access to database:
    $db = new PDO('mysql:host=localhost;dbname=simpleBlog;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}

// Returns information on a post:
function getPost($postId) {
    $db = getDb();
    $post = $db->prepare('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
    $post->execute(array($postId));
    if ($post->rowCount() == 1)
        return $post->fetch(); // Access to the first result
    else
        throw new Exception ("Auncun billet ne correspon à l'identification ' $post '");
}

// Returns the list of comments associated with a post:
function getComments($postId) {
    $db = getDb();
    $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\')AS comment_date_fr FROM comments WHERE post_id = ?');
    $comments->execute(array($postId));
    return $comments->fetchAll(); // Get all the results at once
}