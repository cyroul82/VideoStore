<?php
require('VCIDate.vue.php');
function afficheNavAdmin(){
 ?>
   <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNav" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="index.php"><?php afficheDate(); ?></a>
       </div>
       <div id="myNav" class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
           <li><a href="./VCIResaDefault.php">Réserver un film</a></li>
           <li><a href="./404.php">Les Boutiques VC</a></li>
           <li><a href="./404.php">Actualités</a></li>
        </ul>

         <form id="signin" class="navbar-form navbar-right" role="form" action="VCILogAdmin.php" method="post">
           <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
     </div>
   </nav>


 <?php } ?>