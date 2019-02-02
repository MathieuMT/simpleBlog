<?php
session_start();
$_SESSION['captcha'] = mt_rand(1000, 9999);



// ON génère notre captcha , on met ça dans une variable de SESSION qui est égale à une fonction aléatoire composée de 4 chiffre:


// Ensuite on met notre session de captcha dans une image que nous créons $img:
$img = imagecreate(65, 30);



// On fait une variable qui contient notre police d'écriture:
$font = '../fonts/@El&FontDestroy!.ttf';


// On va créer des couleurs dans nos variable pour les assigner par la suite à notre image $img:
$bg  = imagecolorallocate($img, 255, 255, 255); // Ici un fond blanc.


// On créée une nouvelle variable $textcolor qui nous permet de donner une couleur au text en noir dans l'image créée ici à fond blanc:
$text_color = imagecolorallocate($img, 0, 0, 0);


// Maintenant on va assigner notre texte à notre image avec la fonction imagettftext(nom de l'image, taille de la font en pixel, angle d'orientation du texte, axe des absisses qui définisse la position du 1er caractère, axe des ordonnées dont l'origine est le coin bas-gauche du 1er caractère qu'il ne faut pas mettre à zéro ici on le descend de 30px, couleur du texte, police de caractère utilisé, notre captcha):
imagettftext($img, 23, 0, 3, 30, $text_color, $font, $_SESSION['captcha']);



// On affiche l'image en PHP, on a besoin d'un header() avec le type de contenu telle qu'ici une image/jpeg:
header('Content-type:image/jpeg');

// Ensuite on fait le rendu de l'image:
imagejpeg($img);

// On termine avec un image destroy de notre image:
imagedestroy($img);
