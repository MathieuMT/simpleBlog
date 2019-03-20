<?php

require_once 'Model/Model.php';

class ProfileManager extends Model {
    
    // Get the profil of the registered user:
    public function getProfile($profileId) {
        
        $sql = 'SELECT id, role, nickname, pass, email, DATE_FORMAT(registration_date, \'%d/%m/%Y à %Hh%imin%ss\') AS registration_date_fr, avatar, signature FROM members WHERE id = ?';
        
        $profile = $this->executeQuery($sql, array($profileId));
        if ($profile->rowCount() > 0)
            return $profile->fetch(); // Access to the first result line.
        else 
            throw new Exception("Aucun billet ne correspond à l'identifiant '$profileId'");
    }
    
    // Get the role of the registered user:
    public function getRoleUser($profileId) {
        $sql = 'SELECT r.role_id, r.role_name,m.id, m.role, m.nickname, m.pass, m.email, DATE_FORMAT(registration_date, \'%d/%m/%Y à %Hh%imin%ss\') AS registration_date_fr, m.avatar, m.signature FROM roles r LEFT JOIN members m ON r.role_id = m.role WHERE m.id=?';
        
        $roleUser = $this->executeQuery($sql, array($profileId));
        
        if ($roleUser->rowCount() > 0) 
            return $roleUser->fetch();
    }
    
    // Add a new avatar for the profil of the registered user:
    public function addNewAvatar($avatar, $profileId) {
        
        // Create an "avatar" entry in the database:
        $sql = 'UPDATE members SET avatar = :avatar WHERE id = :id ';
        $result = $this->executeQuery($sql, array(
                'avatar' => $avatar,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
 
    }
    
    // Delete avatar of the registered user in the database:
    public function deleteAvatar($profileId) {
        $sql = 'UPDATE members SET avatar = NULL WHERE id = :id ';
        $result = $this->executeQuery($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    // Update the nickname of the registered user in the database:
    public function updateNickname($profileId, $newNickname) {
        
        
        $sql = 'UPDATE members SET nickname = :nickname WHERE id = :id ';
        
        $result = $this->executeQuery($sql, array(
                'nickname' => $newNickname,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    // Update the e-mail of the registered user in the database:
    public function updateEmail($profileId, $newEmail) {
        
        $sql = 'SELECT * FROM members WHERE email = ?';
        
        $reqEmail = $this->executeQuery($sql, array ($newEmail));
        
        $emailExist = $reqEmail->rowCount();
        
        if ($emailExist == 0) {
            $sql = 'UPDATE members SET email = :email WHERE id = :id ';
            $result = $this->executeQuery($sql, array ('email' => $newEmail, 'id' => $_SESSION['id']));
            
            return $result;
        }else {
            return $emailExist;
        }
        
        
    }
    
    // Update the password of the registered user in the database:
    public function updatePass($profileId, $newPass1_hache) {
        
        $sql = 'UPDATE members SET pass = :pass WHERE id = :id';
        
        $result = $this->executeQuery($sql, array(
                'pass' => $newPass1_hache,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    // Update the electronic signature of the registered user in the database:
    public function updateElectronicSignature($profileId, $newElectronicSignature) {
        
        $sql = 'UPDATE members SET signature = :signature WHERE id = :id ';
        
        $result = $this->executeQuery($sql, array(
                'signature' => $newElectronicSignature,
                'id' => $_SESSION['id']
                                    ));
        return $result;
        
    }
    
    // Delete Signature of the registered user in the database:
    public function deleteSignature($profileId) {
        
        
        $sql = 'UPDATE members SET signature = NULL WHERE id = :id ';
        $result = $this->executeQuery($sql, array(
                'id' => $_SESSION['id']
                                    ));
        return $result;
    }
    
}