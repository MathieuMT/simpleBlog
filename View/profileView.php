<!-- profile View -->

<?php $this->title = $profile['nickname'] .' - PROFIL'; ?>


<?php

if (isset($_SESSION['nickname'])) {
?>


<div class="profileMember">
  
    <h3>Profil de : "<?= $profile['nickname'] ?>"</h3><br />
    
    <p><?= $profile['nickname'] ?>, vous êtes inscrit en tant que <u><?= $profile['role'] ?></u>  depuis le <i><?= $profile['registration_date_fr'] ?></i> sur le blog Jean FORTEROCHE.</p>
    
    <br />
    <br />
    
    <?php
        if (empty($profile['avatar'])) {
            
    ?>
        <div id="avatar">
            <label><b>Votre avatar: </b><img class="avatar_profile" src="Content/avatars/no_avatar.png" alt="avatar" /></label><br />
             
            <button class="btn_update_avatar_profile" >Ajouter un avatar à <?= '\'' . strtoupper($profile['nickname']) . '\'' ?> ici</button><br /> 
            
            <div class="success"><?php if (isset($success['profileAvatar'])) echo $success['profileAvatar']; ?></div>   
            
            <div class="popup_update_avatar_profile">
                <p><span class="btn_closePopupAvatar">&times;</span></p> 
                
                <h4><u>AJOUTER UN AVATAR À <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4>
                
                
                <form method="post" action="index.php?action=profileAvatar&id=<?= $profile['id'] ?>" enctype="multipart/form-data">
                    
                    <tr>
                      
                       <td align="right">
                            <label class="label" for="avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                       </td>
                       
                       <td>
                            <input type="file" id="avatar_field" name="avatar_field" class="input_avatar" />
                       </td>
                       
                   </tr>
  
                   <tr>
                      
                       <td colspan="2">
                            <br />
                            <input type="submit" value="Ajouter l'avatar sélectionné" name="btn_submit_form_update_avatar" class="input_avatar"/>
                       </td>
                           
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
               <p><span class="btn_closePopup">&times;</span></p>
               
                <h4><u>MODIFIER L'AVATAR DE <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4> 
                
                
                <form method="post" action="index.php?action=profileAvatar&id=<?= $profile['id'] ?>" enctype="multipart/form-data">
                    
                    <tr>
                      
                       <td align="right">
                            <label class="label" for="avatar_field">Sélectionnez votre avatar (ou photo de votre profil) au format jpg, jpeg, png ou gif (taille Max = 2Mo) : </label> 
                       </td>
                       
                       <td>
                            <input type="file" id="avatar_field" name="avatar_field" class="input_avatar"/>
                       </td>
                       
                    </tr>
                     
                    <tr>
                      
                       <td colspan="2">
                            <br />
                            <input type="submit" value="Mettre à jour l'avatar" name="btn_submit_form_update_avatar" class="input_avatar" />
                       </td>
                       
                       <td></td>
                       
                   </tr>
                    
                </form>
                
                
               
            </div>
            
            <div class="popup_delete_avatar_profil">
            <form method="post" action="index.php?action=profileDeleteAvatar&id=<?= $profile['id'] ?>" enctype="multipart/form-data">
                     
                    <tr>
                      
                       <td colspan="2">
                            <br />
                            <input type="submit" value="Supprimer l'avatar" name="btn_submit_form_delete_avatar" class="input_avatar" />
                       </td>
                       
                       <td></td>
                       
                   </tr>
                    
            </form>
            </div>
            
            
            <div class="error"><?php if (isset($error['profileAvatar'])) echo $error['profileAvatar']; ?></div>
            
        </div>
    <?php
        } 
    ?> 
    
    <br />
    <br />
    
    <div id="nickname"><span>Votre pseudo : <i><?= $profile['nickname'] ?></i></span><br />
        <button class="btn_update_nickname_profile" >Modifier votre pseudo <?= '\'' . $profile['nickname'] . '\'' ?> ici</button><br />
    <div class="popup_update_nickname_profile">
        <p><span class="btn_closePopupNickname">&times;</span></p>
               
        <h4><u>MODIFIFICATION DU PSEUDO <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4>
        
        <form method="POST" action="index.php?action=profileNickname&id=<?= $profile['id'] ?>" >
            <tr>      
                <td>
                    <label class="label_update_pseudo" for="newNickname">Modifier votre pseudo <?= '\'' . $profile['nickname'] . '\'' ?> : </label> 
                </td>
                       
                <td>
                    <input type="text" placeholder="Votre nouveau pseudo" id="newNickname" name="newNickname" size="30" class="input_nickname" />
                </td>       
            </tr>
            
            <tr>
                      
                <td colspan="2">
                <br />
                    <input type="submit" value="Mettre à jour mon pseudo !" name="btn_submit_update_nickname_profile" />
                </td>
                       
                <td></td>
                       
            </tr>
        </form>
    </div>
    </div>
    
    <div id="email"><span>Votre e-mail est : <i><?= $profile['email'] ?></i></span><br />
    
          
        <button class="btn_update_email_profile" >Modifier l'email de <?= '\'' . $profile['nickname'] . '\'' ?> ici</button><br />
        
        
    <div class="popup_update_email_profile">
        <p><span class="btn_closePopupEmail">&times;</span></p>
               
        <h4><u>MODIFIFICATION DE L'E-MAIL DE <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4>
        
        <form method="POST" action="index.php?action=profileEmail&id=<?= $profile['id'] ?>" >
            <tr>      
                <td>
                    <label class="label_update_email" for="newemail">Modifier votre adresse e-mail : </label> 
                </td>
                       
                <td>
                    <input type="email" placeholder="Votre nouvelle adresse e-mail" value="<?php echo $profile['email']; ?>" id="newemail" name="newemail" size="30" class="input_email" />
                </td>       
            </tr>
            
            <tr>
                      
                <td colspan="2">
                <br />
                    <input type="submit" value="Mettre à jour mon e-mail !" name="btn_submit_update_email_profile" />
                </td>
                       
                <td></td>
                       
            </tr>
        </form>
    </div>
    <div class="error"><?php if (isset($error['profileEmail'])) echo $error['profileEmail']; ?></div><br />
    </div>
    
    <div id="pass"><span>Modifier le mot de passe est de <i><?= '\'' . $profile['nickname'] . '\'' ?></i></span><br />
        <button class="btn_update_pass_profile" >Modifier le mot de pass de <?= '\'' . $profile['nickname'] . '\'' ?> ici</button><br />
    <div class="popup_update_pass_profile">
        <p><span class="btn_closePopupPass">&times;</span></p>
               
        <h4><u>MODIFIFICATION DU MOT DE PASSE DE <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4>
        
        <form method="POST" action="index.php?action=profilePass&id=<?= $profile['id'] ?>" >
            <tr>      
                <td>
                    <label class="label_update_pass" for="newemail">Modifier votre mot de passe : </label> 
                </td>
                       
                <td>
                    <input type="password" placeholder="Votre nouveau mot de passe" id="newPass1" name="newPass1" size="30" class="input_pass" />
                </td>       
            </tr>
            
            <br />
            
            <tr>      
                <td>
                    <label class="label_update_pass" for="newemail">Confirmer votre mot de passe : </label> 
                </td>
                       
                <td>
                    <input type="password" placeholder="Confirmer votre nouveau mot de passe" id="newPass2" name="newPass2" size="30" class="input_pass" />
                </td>       
            </tr>
            
            <tr>
                      
                <td colspan="2">
                <br />
                    <input type="submit" value="Mettre à jour mon mot de passe !" name="btn_submit_update_pass_profile" />
                </td>
                       
                <td></td>
                       
            </tr>
        </form>
    </div>
    <div class="error"><?php if (isset($error['profilePass'])) echo $error['profilePass']; ?></div><br />
    </div>
    
    <?php
        if (empty($profile['signature'])) {
            
    ?>
    
        <div id="signature"><span>Vous n'avez pas encore de signature électronique !</span><br />
            <button class="btn_update_electronic_signature_profile" >Ajouter une signature électronique au profil de <?= '\'' . $profile['nickname'] . '\'' ?> ici</button><br />
        <div class="popup_update_electronic_signature_profile">
            <p><span class="btn_closePopupSignatureElectronic">&times;</span></p>

            <h4><u>AJOUT D'UNE SIGNATURE ÉLECTRONIQUE À <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4>

            <form method="POST" action="index.php?action=profileSignatureElectronic&id=<?= $profile['id'] ?>" >
                <tr>      
                    <td>
                        <label class="label_update_electronic_signature" for="newElectronicSignature">Ajouter votre signature électroniquez : </label> 
                    </td>

                    <td>
                        <textarea id="newElectronicSignature" name="newElectronicSignature" placeholder="Votre nouvelle signature electronique" ROWS="4" COLS="40"><?= $profile['signature'] ?></textarea>
                    </td>       
                </tr>

                <tr>

                    <td colspan="2">
                    <br />
                        <input type="submit" value="Mettre à jour ma signature !" name="btn_submit_update_electronic_signature_profile" />
                    </td>

                    <td></td>

                </tr>
            </form>
        </div>
        </div>
        
    <?php
    } else {
    ?>    
    
        
        
        <div id="signature"><span>Votre signature électronique est : <i><?= $profile['signature'] ?></i></span><br />
            
            <button class="btn_delete_electronic_signature_profile" >Supprimer votre signature électronique sur le profil de <?= '\'' . $profile['nickname'] . '\'' ?> ici</button><br />
            
        <div class="popup_delete_electronic_signature_profile"> 
            <p><span class="btn_closePopupDeletetSignatureElectronic">&times;</span></p>
             
            <h4><u>SUPPRESSION DE LA SIGNATURE ÉLECTRONIQUE DE <?= '\'' . strtoupper($profile['nickname']) . '\'' ?></u></h4>   
              
            <form method="POST" action="index.php?action=profileSignatureElectronicDelete&id=<?= $profile['id'] ?>">
                
                <tr>      
                    <td>
                        <label class="label_delete_electronic_signature" for="deleteElectronicSignature">Supprimer votre signature électroniquez : <?= $profile['signature'] ?></label> 
                    </td>
     
                </tr>
                
                <tr>

                    <td colspan="2">
                    <br />
                        <input type="submit" value="Supprimer la signature" name="btn_submit_delete_electronic_signature_profile" class="input_avatar" />
                    </td>

                    <td></td>

                </tr>

            </form>
        </div>    
        
    <?php
    } 
    ?> 
    
    
    <br />
    <br />
    
</div>

<?php
}
?>
