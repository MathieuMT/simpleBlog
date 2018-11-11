<?php

// Returns a list of all posts, sorted by descending date:
function getPosts() {
    // Access to data:
    $db = new PDO('mysql:host=localhost;dbname=simpleBlog;charset=utf8', 'root', 'root');
    $posts = $db->query('SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');
    return $posts;
}

