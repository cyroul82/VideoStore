<?php
require('presentation/Login.vue.php');
if(isset($_GET["erreur"]) && !empty($_GET["erreur"])){
  $erreur = htmlentities($_GET["erreur"]);
}
else $erreur="";
if(isset($_POST["page"])){
  var_dump($_POST["page"]);
  $_SESSION["page"]=$_POST["page"];
}
DisplayLogin($erreur);
 ?>
