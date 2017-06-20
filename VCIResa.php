<?php
  require('presentation/VCIResa.vue.php');
  require('DAO/VideoDAO.php');

  $user = 'utilweb';
  $password = 'utilweb';

  $data = array();
  $data = VideoDAO::ListeTypesFilms($user, $password);

  SelectionTypeFilm($data);

 ?>
