<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function AfficheFormSaisieAdherent(){
  $bool=false;
  if(isset($_SESSION["email"])){
    $bool=true;
  }
 ?>
 <?php afficheEntete(); ?>
 <script language="javascript">
 function vazy()
 {
 	var erreur = false;
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
       <div class="col-xs-12 text-center">

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

          <?php if($bool){ ?>
         	<h2 >Veuillez saisir vos coordonnées:</h2>

          <form id="coordonnee" action="VCIResa4.php" method = "get">
          	<input type = "hidden" name="codfil" value="<?php  echo $_GET['filmchoisi'] ; ?>">
          	<input type="hidden" name ="libfil" value="<?php  echo $_GET['libfilmchoisi'] ;?>">
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
         			<td ><input type="button" value="Réserver" onclick="javascript:vazy();"> <input type ="button" value = " Annuler " onclick="javascript:window.location.href = 'vciresa.php';"></td>
         		</tr>
         	</table>
         	</div>
         </form>
         <?php } else {?>
           <h2 >Pour voir ce film, merci de vous connecter</h2>
           <!-- <form  role="form" action="Login.php" method="post">
            <input type="hidden" name="page"  value="<?php $_SERVER['argv']; ?>">
            <button type="submit" class="btn btn-primary">Login</button>
          </form> -->
           <?php } ?>
       </div>
     </div>
   </div>

 </body>
 </html>
 <?php } ?>
