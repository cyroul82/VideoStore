<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function DisplayLogin($erreur){
 ?>
 <?php afficheEntete(); ?>

 </head>
 <body>
   <?php afficheNavAdmin(); ?>

   <div class="container">
     <?php if(!empty($erreur)){ ?>
       <div class="alert alert-danger" role="alert">
         <strong>Damn it !</strong> <?php echo $erreur; ?>
       </div>

     <?php } ?>
    <div class="row">

      <div class="main">
        <form role="form" action="VCILogAdmin.php" method="post">
          <div class="form-group">
            <label for="inputUsernameEmail">Email</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
           </div>
          </div>
          <div class="form-group">
            <a class="pull-right" href="#">Forgot password?</a>
            <label for="inputPassword">Password</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
            </div>
          </div>
          <div class="checkbox pull-right">
            <label>
              <input type="checkbox" name="remember">
              Remember me </label>
          </div>
          <button type="submit" class="btn btn btn-primary">
            Log In
          </button>
        </form>

      </div>

    </div>
  </div>


 </body>
 </html>
 <?php } ?>
