<?php

require 'Model.php';

try {
    if (isset($_GET['id'])) {
        // intval returns the numeric value of the parameter or 0 if unsuccessful:
        $id = intval($_GET['id']);
        if ($id != 0) {
            $post = getPost($id);
            $comments = getComments($id);
            require 'postView.php';
        }
        else
            throw new Exception("Identifiant de billet incorrect");
    }
    else 
        throw new Exception("Aucun identifiant de billet");
}
catch (Exception $e) {
    $errorMsg = $e->getMessage();
    require 'errorView.php';
}