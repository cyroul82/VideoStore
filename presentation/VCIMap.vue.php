<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');
require('ApiKey.php');

function DisplayMap(){
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
      <div class="col-xs-12 text-center">
        <h1>Contact !</h1>
        <div id="map">
      </div>
    </div>
  </div>
  <script src="js/map.js" charset="utf-8"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU0fHf2zsjxFQuWJ2It_HbNcpFnjHeMNo&callback=initMap"  type="text/javascript"></script></div>

</body>
</html>
<?php } ?>
