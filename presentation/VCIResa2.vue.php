<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function AfficheListeFilmsParType($rowTypeFilm, $dataFilms){
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
             <h1>Liste des films du type <?php  echo $rowTypeFilm['LIB_TYPE_FILM'] ;?></h1>
             <?php
             if (count($dataFilms) == 0){
             ?>
             <span class="erreur">Désolé, aucun film disponible pour le type<?php echo $rowTypeFilm['LIB_TYPE_FILM'] ;?></span>
             <?php
             } else {
             ?>
             <small>Sélectionnez le film que vous désirez réserver</small>
          </div>
           <table class="listefilms table table-striped text-left">
               <tr>
                 <th >Titre du film</th>
                 <th >Son année</th>
                 <th >Réalisateur</th>
               <th >Affiche</th>
               </tr>

             <?php
                foreach($dataFilms as $rowFilm){
             ?>
             <tr>
               <td> <a href="VCIResa3.php?filmchoisi=<?php echo $rowFilm['ID_FILM'] ;?>&libfilmchoisi=<?php  echo urlencode($rowFilm['TITRE_FILM']) ;?>&anfilmchoisi=<?php  echo $rowFilm['ANNEE_FILM'] ; ?>&reafilmchoisi=<?php  echo urlencode($rowFilm['PRENOM_STAR'] . ' ' . $rowFilm['NOM_STAR']) ;?>&affiche=<?php  echo urlencode($rowFilm['REF_IMAGE']) ; ?>">
               <?php  echo $rowFilm['TITRE_FILM'] ; ?> </a></td>
                 <td> <?php  echo $rowFilm['ANNEE_FILM'] ; ?></td>
               <td> <?php  echo $rowFilm['NOM_STAR'] . ' ' . $rowFilm['PRENOM_STAR'] ; ?></td>
               <td><a href="VCIResa3.php?filmchoisi=<?php echo $rowFilm['ID_FILM'] ;?>&libfilmchoisi=<?php  echo urlencode($rowFilm['TITRE_FILM']) ;?>&anfilmchoisi=<?php  echo $rowFilm['ANNEE_FILM'] ; ?>&reafilmchoisi=<?php  echo urlencode($rowFilm['PRENOM_STAR'] . ' ' . $rowFilm['NOM_STAR']) ;?>&affiche=<?php  echo urlencode($rowFilm['REF_IMAGE']) ; ?>">
               <img border="0" src="images/affiches/<?php  echo $rowFilm['REF_IMAGE'] ;?>" title="<?php  echo $rowFilm['RESUME']; ?>"></a></td>
             </tr>
             <?php
               }
             ?>

           </table>
           <?php
           }
           ?>

         </div>

         <div class="row">
           <div class="col-xs-6 text-right">
             <form action="VCIResaDefault.php" class="form-group">
               <button type="submit" class="btn btn-default">Autre type de film</button>
             </form>
           </div>
           <div class="col-xs-6 text-left">
             <form action="VCIAccueil.php" class="form-group">
               <button type="submit" class="btn btn-default">Retour accueil</button>
             </form>
           </div>



         </div>

     </div>
   </div>

 </body>
 </html>
 <?php } ?>
