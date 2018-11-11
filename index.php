<?php
// Data access link:
require 'Model.php';

// Call the function that displays all posts in descending of dates:
$posts = getPosts();

// Access link to the display:
require 'homeView.php';



