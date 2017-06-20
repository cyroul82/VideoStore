<?php
require ("./presentation/Admin/VCIEnteteAdmin.vue.php");
require ("./presentation/Admin/VCITitreAdmin.vue.php");
require ("./presentation/Admin/VCINavLogout.vue.php");

function afficheAdmin($success, $erreur){ ?>
  <?php afficheEnteteAdmin(); ?>
  </head>
  <body>
    <?php afficheNavAdminLogout(); ?>
    <div class="container">
      <div class="jumbotron">
        <header>
          <?php afficheTitreAdmin(); ?>
        </header>
      </div>

    </div>
    <div class="container">
      <div class="row">

        <div class="col--12 text-center">
          <h1>Salut Admin</h1>
          <?php if(isset($erreur) && !empty($erreur)){ ?>
            <div class="alert alert-danger" role="alert">
              <strong>No no no -> Error Fatal Bazooka !</strong> <?php echo $erreur ?>
            </div>
          <?php } ?>

          <?php if(isset($success) && !empty($success)){ ?>
            <div class="alert alert-success" role="alert">
              <strong>Movie saved</strong> You're so awesome !!!
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

  </body>
  </html>
  <?php } ?>
