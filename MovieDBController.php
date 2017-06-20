<?php
require ("DAO/MovieDBDao.php");
require("presentation/MovieDB.vue.php");

$movies = MovieDBDao::getPopularMovie();

DisplayPopularMovies($movies);
 ?>
