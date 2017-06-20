<?php
  require('presentation/VCIResa2.vue.php');
  require('DAO/VideoDAO.php');

  $user = 'utilweb';
  $password = 'utilweb';

  if(isset($_GET["typef"]) && !empty($_GET["typef"])){
    $rowTypeFilm = VideoDAO::RetourneTypeFilm($user, $password, htmlentities($_GET["typef"]));

    $dataFilms = array();
    $dataFilms = VideoDAO::ListFilmsParType($user, $password, htmlentities($_GET["typef"]));

    AfficheListeFilmsParType($rowTypeFilm, $dataFilms);
  }
  else {
    header("location: 404.php");
  }


 ?>
