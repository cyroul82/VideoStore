<?php
require ("./presentation/Admin/VCIEnteteAdmin.vue.php");
require ("./presentation/Admin/VCITitreAdmin.vue.php");
require ("./presentation/VCINavAdmin.vue.php");

function afficheNewFilm($typesFilms, $realisateursFilm){ ?>
  <?php afficheEnteteAdmin(); ?>
  </head>
  <body>
    <?php afficheNavAdmin(); ?>
    <div class="container">
      <div class="jumbotron">
        <header>
          <?php afficheTitreAdmin(); ?>
        </header>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1 >Saisie d'un nouveau film</h1>

          <form class="form-horizontal" name="frmNewFilm" action="VCINewFilm2.php" method="post">
            <div class="form-group">
              <label for="ID_FILM" class="col-sm-2 control-label">Identifiant :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="ID_FILM" >
              </div>
            </div>

            <div class="form-group">
              <label for="TITRE_FILM" class="col-sm-2 control-label">Titre :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="TITRE_FILM">
              </div>
            </div>

            <div class="form-group">
              <label for="CODE_TYPE_FILM" class="col-sm-2 control-label">Type de Film :</label>
              <div class="col-sm-10">
                <select class="form-control" name="CODE_TYPE_FILM">
                  <?php  // liste des types issus du recordset
                      foreach ($typesFilms as $row) {
                   ?>
                  <option value = "<?php  echo $row['CODE_TYPE_FILM'] ?>"><?php  echo $row['LIB_TYPE_FILM']?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="ID_REALIS" class="col-sm-2 control-label">Réalisateur :</label>
              <div class="col-sm-10">
                <select class="form-control"  name="ID_REALIS" />
          				<?php
          				foreach ($realisateursFilm as $row) {
          				?>
          				<option value = "<?php  echo $row['ID_STAR'] ?>"><?php  echo trim($row['NOM_STAR']) . " " . trim($row['PRENOM_STAR']);?></option>
          				<?php
          				}
          				?>
          			</select>
              </div>
            </div>

            <div class="form-group">
              <label for="ANNEE_FILM" class="col-sm-2 control-label">Année de Sortie :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="ANNEE_FILM">
              </div>
            </div>

            <div class="form-group">
              <label for="REF_IMAGE" class="col-sm-2 control-label">Affiche :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="REF_IMAGE">
              </div>
            </div>

            <div class="form-group">
              <label for="RESUME" class="col-sm-2 control-label">Resume :</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="RESUME" rows="5"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Créer</button>
                <button type="reset" class="btn btn-default">Clear</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

  </body>
  </html>
  <?php } ?>
