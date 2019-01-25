<!-- profile View -->

<?php $this->title = $profile['nickname'] .' - PROFIL'; ?>


<?php

if (isset($_SESSION['nickname'])) {
?>


<div class="profileMember">
  
    <h3>Profil de : "<?= $profile['nickname'] ?>"</h3><br />
    
    
    
    <?php
        if (empty($profile['avatar'])) {
            
    ?>
        <div id="avatar">
            <label><b>Votre avatar: </b><img class="avatar_profile" src="Content/avatars/no_avatar.png" alt="avatar" /></label><br />
             
            <button class="btn_update_avatar_profile" >Ajouter un avatar à <?= '\'' . strtoupper($profile['nickname']) . '\'' ?> ici</button><br /> 
            
             <div class="success"><?php if (isset($success['profileAvatar'])) echo $success['profileAvatar']; ?></div>   
            
            <div class="popup_update_avatar_profile">
                <p><span class=btn_closePopupAvatar>&times;</span></p> 
                
                <h4><u>AJOUTER UN AVATAR À <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4>
                
                
                <form method="post" action="index.php?action=profileAvatar&id=<?= $profile['id'] ?>" enctype="multipart/form-data">
                    
                    <tr>
                      
                       <td align="right">
                            <label class="label" for="avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                       </td>
                       
                       <td>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                       </td>
                       
                       <td>
                            <input type="file" id="avatar_field" name="avatar_field" class="input_avatar" />
                       </td>
                       
                   </tr>
                   
                   <tr>
                      
                       <td colspan="3">
                            <br />
                            <input type="submit" value="Ajouter l'avatar sélectionné" name="btn_submit_form_update_avatar" class="input_avatar"/>
                       </td>
                           
                        <td></td>
                        <td></td>
                       
                   </tr>
                    
                </form>
                
            </div>
            
            <div class="error"><?php if (isset($error['profileAvatar'])) echo $error['profileAvatar']; ?></div>
            
        </div>
    <?php
    } else {
    ?>
       
       
        <div id="avatar">
           <label><b>Votre avatar: </b><img class="avatar_profile"  src="Content/avatars/<?php echo $profile['avatar'] ?>" alt="avatar" /></label><br />
           
           <button class="btn_update_avatar_profile" >Modifier l'avatar de <?= '\'' . $profile['nickname'] . '\'' ?> ici</button><br />
           
           <div class="success"><?php if (isset($success['profileAvatar'])) echo $success['profileAvatar']; ?></div>
           
           <div class="popup_update_avatar_profile">
               <p><span class=btn_closePopup>&times;</span></p>
               
                <h4><u>MODIFIER L'AVATAR DE <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4> 
                
                
                <form method="post" action="index.php?action=profileAvatar" enctype="multipart/form-data">
                    
                    <tr>
                      
                       <td align="right">
                            <label class="label" for="avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                       </td>
                       
                       <td>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                       </td>
                       
                       <td>
                            <input type="file" id="avatar_field" name="avatar_field" class="input_avatar"/>
                       </td>
                       
                   </tr>
                   
                   <tr>
                      
                       <td colspan="3">
                            <br />
                            <input type="submit" value="Mettre à jour l'avatar" name="btn_submit_form_update_avatar" class="input_avatar" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="Supprimer l'avatar" name="btn_submit_form_delete_avatar" class="input_avatar" />
                       </td>
                       
                       <td></td>
                       <td></td>
                       
                   </tr>
                    
                </form>
                
            </div>
            
            <div class="error"><?php if (isset($error['profileAvatar'])) echo $error['profileAvatar']; ?></div>
            
        </div>
    <?php
        } 
    ?> 
   
    
     
    
      
    <p>Vous êtes inscrit en tant que <u><?= $profile['role'] ?></u>  depuis le <i><?= $profile['registration_date_fr'] ?></i> sur le blog Jean FORTEROCHE.</p>
    
</div>

<?php
}
?>
