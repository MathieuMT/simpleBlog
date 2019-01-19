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
    
}