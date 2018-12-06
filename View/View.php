<?php

class View {
    // Name of the file associated with the view:
    private $file;
    // Title of view (defined in the view file):
    private $title;
    
    public function __construct($action) {
        // Determine the file name view from the action:
        $this->file = "View/" . $action . ".php";
    }
    
    // Generates and displays the view:
    public function generate($data) {
        // Generation of the specific part of the view:
        $content = $this->generateFile($this->file, $data);
        // Generation of the common template using the specique part:
        $view = $this->generateFile('View/template.php', array('title' => $this->title, 'content' => $content));
        // Returns from the view to the browser:
        echo $view;
    }
    
    
    // Generates a view and returns the result produced:
    private function generateFile($file, $data) {
        if (file_exists($file)) {
            // Makes the $data array elements accessible in the view:
            extract($data);
            // Starting the exit delay:
            ob_start();
            // Includes the view file
            // Its result is placed in the output buffer:
            require $file;
            // Stop the timer and return the exit indicator:
            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier '$file' introuvable");
        }
    }
}