<?php
require('presentation/VCIAccueil.vue.php');
if(isset($_GET["erreur"])){
  $erreur=htmlentities($_GET["erreur"]);
}
else $erreur="";
AfficheEcranAccueil($erreur);
 ?>
