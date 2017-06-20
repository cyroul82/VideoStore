<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');
require('VCIMenu.vue.php');

function AfficheDebutPage($dataResa, $erreur){

  $cejour = getdate();
  $libcejour = $cejour['year'] . "-" . $cejour['mon'] . '-' . $cejour['mday'] ;
 ?>
 <?php afficheEntete(); ?>

 </head>
 <body>
   <?php afficheNavAdmin(); ?>
   <div class="container">
     <div class="row">
       <div class="col-md-3">
           <?php afficheMenu(); ?>
       </div>
       <div class="col-md-9">
         <h1>Réservation de film</h1>
         <?php if($erreur ==1){ ?>

          <p>Attention : les coordonnées client saisies sont erronnées !</p>
         	  <form>
         		   <input type="button" value="Retour" onClick="javascript:history.go(-1)">
         	  </form>
          <?php } else if($erreur==2) { ?>
              <p>Attention : il y a déjà une réservation du film "<span class ="important"><?php  echo $dataResa["libfil"]; ?></span>" pour l'adhérent <span class ="important"><?php  echo  $dataResa["nom"]?></span></p>
              	<form>
              		<input type="button" value="Retour" onClick="javascript:history.go(-1)">
              	</form>
            <?php } else { ?>
              	<h2>Merci <span class ="important"><?php  echo $dataResa["nom"]; ?></span>  pour votre réservation.</h2>
              	<p >
              	Il ne vous reste plus qu'à passer en boutique pour retirer votre exemplaire du film<span class ="important">
              	<?php  echo $dataResa["libfil"]; ?></span>
              	</p>
              	<form>
              		<input type="button" value="Retour au menu" onClick="javascript:window.location.href='VCIAccueil.php';">
              	</form>
              <?php } ?>

       </div>
     </div>
   </div>

 </body>
 </html>
 <?php } ?>
