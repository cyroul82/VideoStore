<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');
require('VCIMenu.vue.php');

function AfficheFormSaisieAdherent($dataFilm){
 ?>
 <?php afficheEntete(); ?>
 <script language="javascript">
 function vazy()
 {
 	var erreur = false;
 	// TODO : ajouter un contrôle de saisie du n° adhérent - numérique -  et du nom
 	if (! (erreur))
 		{
 			document.getElementById("coordonnee").submit()
 		}
 }

 </script>
 </head>
 <body>
   <?php afficheNavAdmin(); ?>

   <div class="container">
     <div class="row">
       <div class="col-md-3">
         <nav>
           <?php afficheMenu(); ?>
         </nav>
       </div>
       <div class="col-md-9 text-center">
         <form id="coordonnee" action="VCIResa4.php" method = "get">
         	<input type = "hidden" name="codfil" value="<?php  echo $_GET['filmchoisi'] ; ?>">
         	<input type="hidden" name ="libfil" value="<?php  echo $_GET['libfilmchoisi'] ;?>">
         	<h1 >Voici le film que vous avez sélectionné</h1>
          <hr>
          <div class="row">
            <div class="col-xs-4">
              <img src="images/affiches/<?php  echo $_GET['affiche'] ;?>" />
            </div>
            <div class="col-xs-8">
              <div class="row lead">
                <div class="col-xs-4">
                  Titre :
                </div>
                <div class="col-xs-8 text-left">
                  <?php  echo $_GET['libfilmchoisi']; ?>
                </div>
              </div>
              <div class="row lead">
                <div class="col-xs-4">
                  Année :
                </div>
                <div class="col-xs-8 text-left">
                  <?php  echo $_GET['anfilmchoisi']; ?>
                </div>
              </div>
              <div class="row lead">
                <div class="col-xs-4">
                  Réalisateur :
                </div>
                <div class="col-xs-8 text-left">
                  <?php  echo $_GET['reafilmchoisi']; ?>
                </div>
              </div>
            </div>
          </div>


         	<h2 >Veuillez saisir vos coordonnées:</h2>
          <!-- <form>
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" name="nom" value="" class="form-control" >
            </div>
            <div class="form-group">
              <label for="adherent">Numéro Adhérent</label>
              <input type="text" name="adherent" value="" class="form-control">
            </div>
            <input type="button" value=" Réserver " onclick="javascript:vazy();">
            <input type ="button" value = " Annuler " onclick="javascript:window.location.href = 'vciresa.php';">

          </form> -->
         	<table class="recap">
         		<tr>
         			<td><span title="aide : Adh1 ou Adh2">Nom :</span></td>
         			<td><input type="text" name="nom" id="nom" size="25" maxlength="25" /></td>
         		</tr>
         		<tr>
         			<td><span title="aide : 1 ou 2">N° adhérent :</span></td>
         			<td><input type="text" name="numadherent" id="numadherent" size="25" maxlength="25" /></td>
         		</tr>
         		<tr>
         			<td ></td>
         			<td ><input type="button" value=" Réserver " onclick="javascript:vazy();"> <input type ="button" value = " Annuler " onclick="javascript:window.location.href = 'vciresa.php';"></td>
         		</tr>
         	</table>
         	</div>
         </form>
       </div>
     </div>
   </div>

 </body>
 </html>
 <?php } ?>
