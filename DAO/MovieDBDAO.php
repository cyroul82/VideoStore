<?php
require('ApiKey.php');
class MovieDBDao {
  public static function getPopularMovie(){
    $url = "https://api.themoviedb.org/3/movie/popular?";
    $url .= "api_key=" . APIKEY;
    $url .= "&language=fr-FR&page=1";
    $json = file_get_contents($url);
    $obj = json_decode($json, true);


    return $obj;
  }
}


 ?>
