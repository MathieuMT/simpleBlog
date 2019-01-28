<?php

require_once 'Model/ProfileManager.php';
require_once 'View/View.php';

class ProfileController {
   
    private $error;
    private $success;
    private $profile;
    private $avatar;
    private $avatar_tmp;
    private $avatarSize;
    private $tailleMax;
    private $validExtensions;
    private $uploadExtension;
    private $newNickname;
    private $newEmail;
    
    public function __construct() {
        $this->profile = new ProfileManager();
    }
    
    // Show profile detail:
    public function showProfile($profileId) {
        $profile = $this->profile->getProfile($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile));
    }
    
    public function newAvatar($profileId, $avatar) {
        
        $this->avatar = $_FILES['avatar_field']['name'];
        $this->avatar_tmp = $_FILES['avatar_field']['tmp_name'];
        $this->avatarSize = $_FILES['avatar_field']['size'];
        $this->validExtensions = array('jpg', 'jpeg', 'png', 'gif','JPG'); // Tableau des extensions acceptées à uploader.
        $this->uploadExtension = strtolower(substr(strrchr($_FILES['avatar_field']['name'], '.'), 1));
        //var_dump($this->validExtensions);
        //var_dump($this->avatar_tmp);
        //var_dump($this->avatarSize);
        //$profileAddAvatar;
        //var_dump($this->avatar);
        
        // recuperer l'extension de l'image
        if (!empty($this->avatar)) {
             
            
            $this->tailleMax =  2097152; // Taille limite en octets de la variable FILES à uploader (ici 2Mo).
            //var_dump($this);
            if ($this->avatarSize <= $this->tailleMax) {
            //var_dump($this->avatarSize);
            //var_dump($this->avatar_tmp);
                //$image = explode('.', $this->avatar);
                //print_r($image);
                //$image_ext = end($image);
                //var_dump($image_ext);
                //print_r($image_ext);

                if (in_array($this->uploadExtension,$this->validExtensions)) {
                    
                    move_uploaded_file($this->avatar_tmp,'Content/avatars/'.$profileId.'.'.$this->uploadExtension);
                    
                    if ($this->avatar = NULL) {
                        
                        $avatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->profile->addNewAvatar($avatarUrl, $profileId);
                        
                        $this->success['profileAvatar'] = 'Vous avez bien modifié votre avatar à votre profil';   
                        
                    }else {
                        
                        $avatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->profile->addNewAvatar($avatarUrl, $profileId);
                    
                        $this->success['profileAvatar'] = 'Vous avez bien ajouté un avatar à votre profil';
                    }
                    
                    
                    
                }else {
                    
                    $this->error['profileAvatar'] = 'Votre avatar ou image de profil doit être au format jpg, jpeg, png ou gif pour être valide !';
                }
            
            }else {
                $this->error['profileAvatar'] = 'Votre avatar ou image de profil ne doit pas dépasser 2Mo !';
            }
            
        }
        
        
        
        $profile = $this->profile->getProfile($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));
        
    }
    
    
    public function noAvatar($profileId) {
                   
        $this->profile->deleteAvatar($profileId);
                    
        // $this->success['profileAvatar'] = 'Vous avez bien supprimé l\'avatar de votre profil';

        $profile = $this->profile->getProfile($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));
    }
    
    public function editNickname($profileId, $newNickname) {
        
        $newNickname = htmlspecialchars($newNickname);
        $profile = $this->profile->getProfile($profileId);
        
        // Pour changer de pseudo en fonction de l'id de l'utilisateur:
        if (isset($newNickname) and !empty($newNickname) and $newNickname != $profile['nickname']) {
            
            $this->profile->updateNickname($profileId, $newNickname);
            
            unset($_SESSION['nickname']);
            
            $_SESSION['nickname'] = $newNickname;
                
        }
        
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));
        
    }
    
    public function editEmail($profileId, $newEmail) {
        
        $newEmail = htmlspecialchars($newEmail);
        $profile = $this->profile->getProfile($profileId);
        
            // Pour changer d'e-mail en fonction de l'id de l'utilisateur:
        if (isset($newEmail) and !empty($newEmail) and $newEmail != $profile['email']) {
            
            
            if ($this->profile->updateEmail($profileId, $newEmail) != 0) {
                $this->profile->updateEmail($profileId, $newEmail);
            }else {
            
                $this->error['profileEmail'] = 'L\'adresse e-mail suivante: "' . $newEmail . '" est déjà prise !';
            }
        } 
        
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));

    }
    
    public function editPass($profileId, $newPass1, $newPass2) {
        
        
        // Pour changer de mot de passe en fonction de l'id de l'utilisateur:
        if (isset($newPass1) and !empty($newPass1) and isset($newPass2) and !empty($newPass2)) {
            $newPass1 = htmlspecialchars($newPass1);
            $newPass2 = htmlspecialchars($newPass2);

            $profile = $this->profile->getProfile($profileId);

            if ($newPass1 == $newPass2) {
                $newPass1_hache = password_hash($newPass1, PASSWORD_DEFAULT);
                $newPass2_hache = password_hash($newPass2, PASSWORD_DEFAULT);

                $this->profile->updatePass($profileId, $newPass1_hache);

            } else {
                $this->error['profilePass'] =  'Vos deux mots de passes ne correspondent pas !';
            }

            $view = new View("profileView");
            $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));

            }
    }
    
    public function editSignatureElectric($profileId, $newElectronicSignature) {
        
        $profile = $this->profile->getProfile($profileId);
        
        // SIGNATURE ÉLECTRONIQUE => Si la variable signature existe bien et qu'elle n'est pas vide :
        if (isset($newElectronicSignature) and !empty($newElectronicSignature)) {
            
            $newElectronicSignature = nl2br(htmlspecialchars($newElectronicSignature));
            
            $this->profile->updateElectronicSignature($profileId, $newElectronicSignature);
        }
        
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));    
    }
    
    public function noSignature($profileId) {
        
        $this->profile->deleteSignature($profileId);
        
        $profile = $this->profile->getProfile($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'error' => $this->error, 'success' => $this->success));
    }
    
    
}