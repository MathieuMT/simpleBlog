<?php

require_once 'Model/ProfileManager.php';
require_once 'View/View.php';

class ProfileController {
    private $error;
    private $success;
    private $profile;
    private $avatar;
    private $avatar_tmp;
    
    public function __construct() {
        $this->profile = new ProfileManager();
    }
    
    // Show profile detail:
    public function showProfile($profileId) {
        $profile = $this->profile->getProfile($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile));
    }
    
    public function newAvatar($profileId, $avatar, $avatar_tmp) {
        
        $this->avatar = $_FILES['avatar_field']['name'];
        $this->avatar_tmp = $_FILES['avatar_field']['tmp_name'];
        
        var_dump($this->avatar_tmp);
        
        $profileAddAvatar;
        
        // recuperer l'extension de l'image
        if (!empty($this->avatar)) {
            
            $image = explode('.', $this->avatar);
            //print_r($image);
            $image_ext = end($image);
            //var_dump($image_ext);
            //print_r($image_ext);
            
            if (in_array(strtolower($image_ext), array('jpeg','jpg','png','gif')) === FALSE) {
                
                $this->error['profileAvatar'] = 'Votre avatar ou image de profil doit être au format jpg, jpeg, png ou gif pour être valide !';
            }else {
                
                 move_uploaded_file($this->avatar_tmp,'Content/avatars/'.$this->avatar);
                
                $profileAddAvatar = $this->profile->addNewAvatar($avatar, $profileId);
                
                $this->success['profileAvatar'] = 'Vous avez bien ajouté un avatar à votre profil';
            }
        }
        
        
        
        $profile = $this->profile->getProfile($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));
        
    }
    
    public function otherAvatar() {
        
    }
    
    public function noAvatar() {
        
    }
    
}