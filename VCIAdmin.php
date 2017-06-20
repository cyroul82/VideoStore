<?php
session_start();
require ("./presentation/Admin/VCIAdmin.vue.php");
if(isset($_SESSION["email"]) && !empty($_SESSION)){
	if(isset($_GET["erreur"]) && !empty($_GET["erreur"])){
		$erreur = htmlentities($_GET["erreur"]);
		$success ="";

	}
	else if(isset($_GET["success"]) && !empty($_GET["success"])) {
		$erreur = "";
		$success = htmlentities($_GET["success"]);

	}
	else {
		$erreur="";
		$success="";
	}

	afficheAdmin($success, $erreur);


}
else {
	header("location: index.php");
}
 ?>
