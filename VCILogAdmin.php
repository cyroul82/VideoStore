<?php
session_start();
require ("./DAO/VideoDAO.php");

  if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])){
    $email = htmlentities($_POST["email"]);
    $password = htmlentities($_POST["password"]);

    if(VideoDAO::login($email, $password)){
      $_SESSION["email"] = $email;

      header("location: VCIAdmin.php");
    }
    else {
     header("location: index.php?erreur=Failure Failure ... Your computer will blow up soon !!!");
    }
  }
  else {
     header("location: index.php");
  }
?>
