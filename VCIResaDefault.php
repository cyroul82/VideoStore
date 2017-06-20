<?php
  require('presentation/VCIResaDefault.vue.php');
  require('DAO/VideoDAO.php');

  $user = 'utilweb';
  $password = 'utilweb';

  $categories = array();
  $categories = VideoDAO::ListeTypesFilms($user, $password);

  $moviesList = array();
  $moviesList = VideoDAO::ListAllMovies($user, $password);

  AfficheListeFilmsParType($moviesList, $categories);

 ?>
