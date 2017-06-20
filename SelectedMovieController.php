<?php
require('presentation/MovieDetail.vue.php');
if(isset($_POST['movie']) && !empty($_POST['movie'])){
  $movie = json_decode($_POST['movie'], true);
  
  DetailMovie($movie);
}
else {
  header("location: MovieDBController.php");
}
 ?>
