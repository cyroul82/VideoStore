<?php
session_start();
require('VCIDate.vue.php');
function afficheNavAdmin(){
  $bool=false;
  $group = false;
  if(isset($_SESSION["email"])){
    $bool = true;
  }
  if(isset($_SESSION["usergroup"]) && $_SESSION["usergroup"]=="admin"){
    $group = true;
  }

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
           <li><a href="./MovieDBController.php">The MovieDB</a></li>
           <?php if($group) {?>
           <li><a href="./VCINewFilm.php">Nouveau film</a></li>
           <?php } ?>
        </ul>
        <?php if(!$bool){ ?>
         <form id="signin" class="navbar-form navbar-right" role="form" action="Login.php" method="post">
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php }
        else { ?>
          <form id="signin" class="navbar-form navbar-right" role="form" action="VCILogout.php" method="post">
           <button type="submit" class="btn btn-primary">Logout</button>
         </form>
      <?php  } ?>
      </div>
     </div>
   </nav>


 <?php } ?>
