<?php
// Access to the controller:
require 'Controller/Controller.php';


try {
   if (isset($_GET['action'])) {
       if ($_GET['action'] == 'post') {
           if (isset($_GET['id'])) {
               $postId = intval($_GET['id']);
               if ($postId != 0)
                   post($postId);
               else
                   throw new Exception("Identifiant de billet non valide");
           }
           else
               throw new Exception("Identifiant de billet non défini");
       }
       else 
        throw new Exception("Action non valide");
   }
    else {
        home(); // Default action
    }
}
catch (Exception $e) {
    error($e->getMessage());
}



