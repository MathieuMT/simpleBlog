<?php

require_once 'Model/Model.php';

class ProfileManager extends Model {
    
    public function getProfile($profileId) {
        
        $sql = 'SELECT id, role, nickname, pass, email, DATE_FORMAT(registration_date, \'%d/%m/%Y à %Hh%imin%ss\') AS registration_date_fr, avatar, signature FROM members WHERE id = ?';
        
        $profile = $this->executeQuery($sql, array($profileId));
        if ($profile->rowCount() > 0)
            return $profile->fetch(); // Access to the first result line.
        else 
            throw new Exception("Aucun billet ne correspond à l'identifiant '$profileId'");
    }
    
    public function addNewAvatar($avatar, $profileId) {
        
        // On va créer une entrée "avatar" dans la BDD:
        $sql = 'UPDATE members SET avatar = :avatar WHERE id = :id ';
        $this->executeQuery($sql, array(
                'avatar' => $avatar,
                'id' => $_SESSION['id']
                                    ));
        header('Location: index.php?action=showProfile&id=' . $profileId);
       
        
    }
    
    public function deleteAvatar($profileId) {
        $sql = 'UPDATE members SET avatar = NULL WHERE id = :id ';
        $this->executeQuery($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        header('Location: index.php?action=showProfile&id=' . $profileId);
    }
    
    public function updateNickname($profileId, $newNickname) {
        
        
        $sql = 'UPDATE members SET nickname = :nickname WHERE id = :id ';
        
        $this->executeQuery($sql, array(
                'nickname' => $newNickname,
                'id' => $_SESSION['id']
                                    ));
        
        header('Location: index.php?action=showProfile&id=' . $profileId);
    }
    
    public function updateEmail($profileId, $newEmail) {
        
        $sql = 'SELECT * FROM members WHERE email = ?';
        
        $reqEmail = $this->executeQuery($sql, array ($newEmail));
        
        $emailExist = $reqEmail->rowCount();
        
        if ($emailExist == 0) {
            $sql = 'UPDATE members SET email = :email WHERE id = :id ';
            $this->executeQuery($sql, array ('email' => $newEmail, 'id' => $_SESSION['id']));
            
            header('Location: index.php?action=showProfile&id=' . $profileId);
        }
    }
    
    public function updatePass($profileId, $newPass1_hache) {
        
        $sql = 'UPDATE members SET pass = :pass WHERE id = :id';
        
        $this->executeQuery($sql, array(
                'pass' => $newPass1_hache,
                'id' => $_SESSION['id']
                                    ));
        
        header('Location: index.php?action=showProfile&id=' . $profileId);
    }
    
    public function updateElectronicSignature($profileId, $newElectronicSignature) {
        
        $sql = 'UPDATE members SET signature = :signature WHERE id = :id ';
        
        $this->executeQuery($sql, array(
                'signature' => $newElectronicSignature,
                'id' => $_SESSION['id']
                                    ));
        
        header('Location: index.php?action=showProfile&id=' . $profileId);
    }
    
    public function deleteSignature($profileId) {
        
        
        $sql = 'UPDATE members SET signature = NULL WHERE id = :id ';
        $this->executeQuery($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        header('Location: index.php?action=showProfile&id=' . $profileId);
        
        
    }
    
}