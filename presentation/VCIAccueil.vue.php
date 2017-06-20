<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');
require('VCIMenu.vue.php');

function AfficheEcranAccueil($erreur){
?>
<?php afficheEntete(); ?>
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
      <div class="col-md-3">
        <nav>
          <?php afficheMenu(); ?>
        </nav>
      </div>
      <div class="col-md-9 text-center">
        <h1>Bienvenue !</h1>
        <?php if(!empty($erreur)){ ?>
          <div class="alert alert-danger" role="alert">
            <strong>Damn it !</strong> <?php echo $erreur; ?>
          </div>

        <?php } ?>
      </div>
    </div>
  </div>

</body>
</html>
<?php } ?>
