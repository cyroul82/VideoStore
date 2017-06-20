<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function afficheConstr(){
 ?>
 <?php afficheEntete(); ?>
 <meta http-equiv="refresh" content="3;VCIAccueil.php" />
 </head>
 <body>
   <?php afficheNavAdmin(); ?>
   <div class="container">
     <div class="jumbotron">
       <header>
         <?php afficheTitre(); ?>
       </header>
     </div>

   </div>
   <div class="container">
     <div class="row">
       <div class="col-xs-12 text-center">
         <span class="constrLogo"><img src="images/constrct.gif" ></span>
         <h1>En Construction</h1>
       </div>
     </div>
   </div>

 </body>
 </html>
 <?php } ?>
