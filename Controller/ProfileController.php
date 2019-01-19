<?php

require_once 'Model/ProfileManager.php';
require_once 'View/View.php';

class ProfileController {
    
    private $profile;
    
    public function __construct() {
        $this->profile = new ProfileManager();
    }
    
    // Show profile detail:
    public function showProfile($profileId) {
        $profile = $this->profile->getProfile($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile));
    }
    
    
    
}