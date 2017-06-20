<?php
  require("presentation/VCIResa4.vue.php");
  require("DAO/VideoDAO.php");

  $cejour = getdate();
  $libcejour = $cejour['year'] . "-" . $cejour['mon'] . '-' . $cejour['mday'] ;
  if(isset($_GET["numadherent"]) && !empty($_GET["numadherent"])
      && isset($_GET["nom"]) && !empty($_GET["nom"])
      && isset($_GET["codfil"]) && !empty($_GET["codfil"])
      && isset($_GET["libfil"]) && !empty($_GET["libfil"])){

        $dataResa["numadherent"] = htmlentities($_GET["numadherent"]);
        $dataResa["nom"] = htmlentities($_GET["nom"]);
        $dataResa["codfil"] = htmlentities($_GET["codfil"]);
        $dataResa["libfil"] = htmlentities($_GET["libfil"]);
        $dataResa["libcejour"] = $libcejour;

        $user='utilweb';
        $password='utilweb';


				$erreur=0;
        if(!(VideoDAO::ExisteAdherent($user, $password, $dataResa))){
					$erreur=1;
          // AfficheErreurAdherentInconnu();
        }
        else {
          if(VideoDao:: ExisteResaPourCeClient($user, $password, $dataResa)){
						$erreur = 2;
            // AfficheErreurResa($dataResa);
          }
          else {
						$erreur = 0;
            VideoDao::InsereResa($user, $password, $dataResa);
            // AfficheOKResa($dataResa);
          }
        }
				AfficheDebutPage($dataResa, $erreur);
  }

  else {
    header("location: 404.php");
  }

 ?>
