<?php
require("./presentation/Admin/VCINewFilm.vue.php");
require("./DAO/VideoDAO.php");

$user = 'utilweb';
$password = 'utilweb';

$typeFilm = array();
$typeFilm = VideoDAO::ListeTypesFilms($user, $password);
$realistateurFilm = array();
$realistateurFilm = VideoDAO::ListeRealisateurs($user, $password);
afficheNewFilm($typeFilm, $realistateurFilm);
 ?>
