<?php

require_once 'Model/ProfileManager.php';
require_once 'View/View.php';

class ProfileController {
   
    private $error;
    private $success;
    private $profile;
    private $roleUser;
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
        $roleUser = $this->profile->getRoleUser($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'roleUser' => $roleUser));
    }
    
    // Add a new avatar of the registered user:
    public function newAvatar($profileId, $avatar) {
        
        $this->avatar = $_FILES['avatar_field']['name'];
        $this->avatar_tmp = $_FILES['avatar_field']['tmp_name'];
        $this->avatarSize = $_FILES['avatar_field']['size'];
        $this->validExtensions = array('jpg', 'jpeg', 'png', 'gif','JPG'); // Tableau des extensions acceptées à uploader.
        $this->uploadExtension = strtolower(substr(strrchr($_FILES['avatar_field']['name'], '.'), 1));
        
        // recover the extension of the image:
        if (!empty($this->avatar)) {
             
            
            $this->tailleMax =  2097152; // Limit size in bytes of the variable FILES to upload (here 2Mo).
            
            if ($this->avatarSize <= $this->tailleMax) {

                if (in_array($this->uploadExtension,$this->validExtensions)) {
                    
                    move_uploaded_file($this->avatar_tmp,'Content/avatars/'.$profileId.'.'.$this->uploadExtension);
                    
                    if ($this->avatar = NULL) {
                        
                        $avatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->profile->addNewAvatar($avatarUrl, $profileId);
                        
                        $this->success['profileAvatar'] = 'Vous avez bien modifié votre avatar à votre profil'; 
                        
                        header('Location: index.php?action=showProfile&id=' . $profileId);
                        
                    }else {
                        
                        $avatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->profile->addNewAvatar($avatarUrl, $profileId);
                    
                        $this->success['profileAvatar'] = 'Vous avez bien ajouté un avatar à votre profil';
                        
                        header('Location: index.php?action=showProfile&id=' . $profileId);
                    }
                    
                    
                    
                }else {
                    
                    $this->error['profileAvatar'] = 'Votre avatar ou image de profil doit être au format jpg, jpeg, png ou gif pour être valide !';
                }
            
            }else {
                $this->error['profileAvatar'] = 'Votre avatar ou image de profil ne doit pas dépasser 2Mo !';
            }
            
        }
        
        
        
        $profile = $this->profile->getProfile($profileId);
        $roleUser = $this->profile->getRoleUser($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'roleUser' => $roleUser, 'error' => $this->error, 'success' => $this->success));
        
    }
    
    // If there is no avatar:
    public function noAvatar($profileId) {
                   
        $this->profile->deleteAvatar($profileId);
        
        header('Location: index.php?action=showProfile&id=' . $profileId);

        $profile = $this->profile->getProfile($profileId);
        $roleUser = $this->profile->getRoleUser($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'roleUser' => $roleUser, 'error' => $this->error, 'success' => $this->success));
    }
    
    // Update the nickname of the registered user:
    public function editNickname($profileId, $newNickname) {
        
        $newNickname = htmlspecialchars($newNickname);
        $profile = $this->profile->getProfile($profileId);
        
        // To change the nickname according to the user's id:
        if (isset($newNickname) and !empty($newNickname) and $newNickname != $profile['nickname']) {
            
            $this->profile->updateNickname($profileId, $newNickname);
            
            unset($_SESSION['nickname']);
            
            $_SESSION['nickname'] = $newNickname;
            
            header('Location: index.php?action=showProfile&id=' . $profileId);
                
        }
        
       $roleUser = $this->profile->getRoleUser($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'roleUser' => $roleUser, 'error' => $this->error, 'success' => $this->success));
        
    }
    
    // Update the e-mail of the registered user:
    public function editEmail($profileId, $newEmail) {
        
        $newEmail = htmlspecialchars($newEmail);
        $profile = $this->profile->getProfile($profileId);
        
            // To change the e-mail according to the user's id:
        if (isset($newEmail) and !empty($newEmail) and $newEmail != $profile['email']) {
            
            
            if ($newEmail != NULL) {
                $this->profile->updateEmail($profileId, $newEmail);

            }else {
            
                $this->error['profileEmail'] = 'L\'adresse e-mail suivante: "' . $newEmail . '" est déjà prise !';
            }

        } 

        $roleUser = $this->profile->getRoleUser($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'roleUser' => $roleUser, 'error' => $this->error, 'success' => $this->success));

    }
    
    // Update the password of the registered user:
    public function editPass($profileId, $newPass1, $newPass2) {
        
        
        // To change the password according to the user's id:
        if (isset($newPass1) and !empty($newPass1) and isset($newPass2) and !empty($newPass2)) {
            $newPass1 = htmlspecialchars($newPass1);
            $newPass2 = htmlspecialchars($newPass2);

            $profile = $this->profile->getProfile($profileId);

            if ($newPass1 == $newPass2) {
                $newPass1_hache = password_hash($newPass1, PASSWORD_DEFAULT);
                $newPass2_hache = password_hash($newPass2, PASSWORD_DEFAULT);

                $this->profile->updatePass($profileId, $newPass1_hache);
                
                header('Location: index.php?action=showProfile&id=' . $profileId);

            } else {
                $this->error['profilePass'] =  'Vos deux mots de passes ne correspondent pas !';
                
                header('Location: index.php?action=showProfile&id=' . $profileId);
            }

            $roleUser = $this->profile->getRoleUser($profileId);
            $view = new View("profileView");
            $view->generate(array('profile' => $profile, 'roleUser' => $roleUser, 'error' => $this->error, 'success' => $this->success));

            }
    }
    
    // Update the electronic signature of the registered user:
    public function editSignatureElectric($profileId, $newElectronicSignature) {
        
        $profile = $this->profile->getProfile($profileId);
        
        // ELECTRONIC SIGNATURE => if the signature variable exists and is not empty:
        if (isset($newElectronicSignature) and !empty($newElectronicSignature)) {
            
            $newElectronicSignature = nl2br(htmlspecialchars($newElectronicSignature));
            
            $this->profile->updateElectronicSignature($profileId, $newElectronicSignature);
            
            header('Location: index.php?action=showProfile&id=' . $profileId);
        }
        
        $roleUser = $this->profile->getRoleUser($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'roleUser' => $roleUser, 'error' => $this->error, 'success' => $this->success)); 
    }
    
    // If there is no signature:
    public function noSignature($profileId) {
        
        $this->profile->deleteSignature($profileId);
        
        header('Location: index.php?action=showProfile&id=' . $profileId);
        
        $profile = $this->profile->getProfile($profileId);
        $roleUser = $this->profile->getRoleUser($profileId);
        $view = new View("profileView");
        $view->generate(array('profile' => $profile, 'roleUser' => $roleUser, 'error' => $this->error, 'success' => $this->success));
    }
}