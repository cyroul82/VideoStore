<?php
  require("./DAO/VideoDAO.php");
  require("./presentation/Admin/film.php");

  $user = 'utilweb';
  $password = 'utilweb';

if(isset($_POST["ID_FILM"]) && !empty($_POST["ID_FILM"])
    && isset($_POST["TITRE_FILM"]) && !empty($_POST["TITRE_FILM"])
    && isset($_POST["CODE_TYPE_FILM"]) && !empty($_POST["CODE_TYPE_FILM"])
    && isset($_POST["ID_REALIS"]) && !empty($_POST["ID_REALIS"])
    && isset($_POST["ANNEE_FILM"]) && !empty($_POST["ANNEE_FILM"])
    && isset($_POST["RESUME"]) && !empty($_POST["RESUME"])) {

      $ID_FILM = htmlentities($_POST["ID_FILM"]);
      $TITRE_FILM = htmlentities($_POST["TITRE_FILM"]);
      $CODE_TYPE_FILM = htmlentities($_POST["CODE_TYPE_FILM"]);
      $ID_REALIS= htmlentities($_POST["ID_REALIS"]);
      $ANNEE_FILM = htmlentities($_POST["ANNEE_FILM"]);
      $RESUME = htmlentities($_POST["RESUME"]);

      $film = new Film();
      $film->setIdFilm($ID_FILM);
      $film->setTitreFilm($TITRE_FILM);
      $film->setCodeTypeFilm($CODE_TYPE_FILM);
      $film->setIdRealisateur($ID_REALIS);
      $film->setAnneeFilm($ANNEE_FILM);
      $film->setResume($RESUME);

      $result = VideoDAO::insertNewFilm($user, $password, $film);
      if(isset($result) && $result > 0) {
        header('Location: VCIAdmin.php?success=film ' . strtoupper(trim($_POST['TITRE_FILM'])) . ' inséré avec succès' );
      }
      else {
        $result .= ' idiot';
        header("Location: VCIAdmin.php?erreur=$result" );
      }

    }
    else {
      header('Location: VCIAdmin.php?erreur=Fill up the form  ばか!!!');
    }




exit();
?>
