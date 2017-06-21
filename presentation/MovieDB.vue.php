<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function DisplayPopularMovies($obj){
  $pages = $obj['total_pages'];
  $dataFilms = $obj['results'];
 ?>
 <?php afficheEntete(); ?>

 </head>
 <body>
   <?php afficheNavAdmin(); ?>

   <div class="container">
     <div class="row">
       <div class="col-xs-12 text-center">
         <div class="row">
           <div class="page-header">
            <h1>Films Populaires</h1>
             <?php
             if (count($dataFilms) == 0){
             ?>
             <span class="erreur">Désolé, aucun films disponibles</span>
             <?php
           } else {
             ?>
             <small>Retrouvez tous les films populaires</small>
           </div>
           <div class="row">
           <?php
              foreach($dataFilms as $rowFilm ){
           ?>

             <div/ class="col-sm-6 col-md-4">
             <!--Card-->
             <div class="card">
                <h4 class="card-title"><?php  echo $rowFilm['title']; ?></h4>
                <!--Card image-->
                <img class="img-fluid" src=<?php  echo 'http://image.tmdb.org/t/p/w185' . $rowFilm['poster_path'] ;?> alt="Poster">
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block">

                    <h5 class=""><?php  echo $rowFilm['release_date'] ; ?></h5>
                    <!-- <p class="card-text"><?php  echo $rowFilm['overview']; ?></p> -->
                    <form class="" action="SelectedMovieController.php" method="post">
                      <input type="hidden" name="movie" value="<?php echo htmlspecialchars(json_encode($rowFilm)); ?>">
                      <button type="submit" class="btn btn-primary" name="movieSelection">More</button>
                    </form>

                </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->
            </div>


           <?php
             }
           ?>
           </div>
           <!-- <table class="listefilms table table-striped text-left">
               <tr>
                 <th >Titre du film</th>
                 <th >Son année</th>
                 <th>Réalisateur</th>
                 <th >Affiche</th>
               </tr>

             <?php
                foreach($dataFilms as $rowFilm ){
             ?>
             <tr>
               <td> <?php  echo $rowFilm['title']; ?> </td>
               <td> <?php  echo $rowFilm['release_date'] ; ?></td>
               <td> <?php  echo $rowFilm['original_title']; ?></td>
               <td><img border="0" src="<?php  echo 'http://image.tmdb.org/t/p/w185' . $rowFilm['poster_path'] ;?>" title="<?php  echo 'title'; ?>"></a></td>
             </tr>
             <?php
               }
             ?>

           </table>
           <?php
           }
           ?> -->

         </div>

         <div class="row">

           <div class="col-xs-12 text-center">
             <form action="VCIAccueil.php" class="form-group">
               <button type="submit" class="btn btn-default">Retour Accueil</button>
             </form>
           </div>



         </div>

     </div>
   </div>

 </body>
 </html>
 <?php } ?>
