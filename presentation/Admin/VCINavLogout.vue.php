<?php
require('/presentation/VCIDate.vue.php');
function afficheNavAdminLogout(){
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
         <a class="navbar-brand" href="#"><?php afficheDate(); ?></a>
       </div>
       <div id="myNav" class="collapse navbar-collapse">
         <form id="signout" class="navbar-form navbar-right" role="form" action="VCILogout.php" method="post">
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
        </form>
      </div>
     </div>
   </nav>


 <?php } ?>
