<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function DetailMovie($movie){
 ?>
 <?php afficheEntete(); ?>

 </head>
 <body>
   <?php afficheNavAdmin(); ?>
   <div class="container">
     <div class="row">
       <div class="col-xs-12">
         <div class="row">
           <div class="page-header">
            <h1 class="text-center"><?php  echo $movie['title']; ?> </h1>

           </div>
           <div class="row">
             <div class="col-md-4">
                <img class="img-fluid" src=<?php  echo 'http://image.tmdb.org/t/p/w185' . $movie['poster_path'] ;?> alt="Poster">
            </div>
            <div class="col-md-8">

            </div>


           </div>
           <div class="row">
             <div class="col-xs-12">
               <p><?php  echo $movie['release_date'] ; ?><p>
               <p><?php  echo $movie['overview']; ?></p>
             </div>
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
