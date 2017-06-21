<?php
class VideoDAO{

  private static function adminConnect(){
    $host= 'localhost';
    $bdd = 'login';
    $user='utilweb';
    $password = 'utilweb';

    try {
      $mysqlPDO = new PDO("mysql:host=$host;dbname=$bdd; charset=utf8", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }
    catch (Exception $e){
      die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
    }
    return $mysqlPDO;
  }

  public static function login($email, $password){
  $error;

  if(VideoDAO::emailExists($email)){

    $req = VideoDAO::adminConnect()->query("select pass from usercontact where email='" . $email . "'");
    $user = $req->fetch();
    $bool=false;

    if($password == $user['pass']){

      $bool= true;
    }
    else{
      $error = array('error'=>'Wrong Password');
      $bool= false;
    }
  }else {
    $error = array('error'=>'email not found in the DB');
    $bool= false;
  }
  $req->closeCursor();
  return $bool;

}

public static function getGroupUser($email){
  $req = VideoDAO::adminConnect()->query("select USERGROUP from usercontact where email='" . $email . "'");
  $data = $req->fetch();
  $group = $data['USERGROUP'];
  $req->closeCursor();
  return $group;

}

private static function emailExists($email)
{

  $response = VideoDAO::adminConnect()->query("select * from usercontact where email='" . $email . "'");

  if($response->fetch()){

    return true;
  }
  else {
    return false;
  }
  $response->closeCursor();
}


  private static function ConnectVideo($user, $password){
    $host= 'localhost';
    $bdd = 'video';

    try {
      $mysqlPDO = new PDO("mysql:host=$host;dbname=$bdd; charset=utf8",
                          $user, $password,
                          array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e){
      die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
    }

    return $mysqlPDO;
  }

  private static function DisconnectVideo($mysqlPDO){
    unset($mysqlPDO);
  }

  public static function RetourneTypeFilm($user, $password, $typeVoulu){
    $mysqlPDO = VideoDAO::ConnectVideo($user,$password);

    $sql = "select CODE_TYPE_FILM, LIB_TYPE_FILM from typefilm where CODE_TYPE_FILM=?";

    $result = $mysqlPDO->prepare($sql);
    $result->execute(array($typeVoulu));
    $data=$result->fetch(PDO::FETCH_ASSOC);

    $result->closeCursor();
    VideoDAO::DisconnectVideo($mysqlPDO);

    return $data;
  }


  public static function ListAllMovies($user, $password){
    $mysqlPDO = VideoDAO::ConnectVideo($user, $password);

    $sql = 'SELECT ID_FILM, CODE_TYPE_FILM, ID_REALIS, TITRE_FILM, ANNEE_FILM, REF_IMAGE, RESUME, NOM_STAR, PRENOM_STAR FROM film inner join star on  ID_REALIS = ID_STAR group by ID_FILM';
    $data = array();
    try {
      $result = $mysqlPDO->query($sql);
      $result->execute();
      $data=$result->fetchAll();
      $result->closeCursor();
      VideoDAO::DisconnectVideo($mysqlPDO);

    }
    catch(Exception $e) {
      die('<h1>Erreur de lecture en base de données : </h1>' . $e->getMessage());
    }

    return $data;
  }

  public static function ListeTypesFilms($user, $password){
    $mysqlPDO = VideoDAO::ConnectVideo($user, $password);

    $sql = 'select CODE_TYPE_FILM, LIB_TYPE_FILM from typefilm order by LIB_TYPE_FILM';
    $data = array();

    try {
      $result = $mysqlPDO->query($sql);
      $result->execute();
      $data=$result->fetchAll();
      $result->closeCursor();
      VideoDAO::DisconnectVideo($mysqlPDO);

    }
    catch(Exception $e) {
      die('<h1>Erreur de lecture en base de données : </h1>' . $e->getMessage());
    }

    return $data;
  }


  public static function ListeRealisateurs($user, $password){
    $mysqlPDO = VideoDAO::ConnectVideo($user, $password);

    $sql = 'SELECT ID_STAR, NOM_STAR,PRENOM_STAR FROM star order by NOM_STAR,PRENOM_STAR;' ;
    $data = array();

    try {
      $result = $mysqlPDO->query($sql);
      $result->execute();
      $data=$result->fetchAll();
      $result->closeCursor();
      VideoDAO::DisconnectVideo($mysqlPDO);

    }
    catch(Exception $e) {
      die('<h1>Erreur de lecture en base de données : </h1>' . $e->getMessage());
    }

    return $data;
  }

  public static function ListFilmsParType($user, $password, $typeVoulu){
    $mysqlPDO=VideoDAO::ConnectVideo($user,$password);

    $sql = "select ID_FILM, TITRE_FILM, ANNEE_FILM, ID_REALIS, REF_IMAGE, RESUME, NOM_STAR, PRENOM_STAR"	 ;
    // - produit cartésien
    $sql .= " from film, star ";
    // - restriction concordance
    $sql .=  " where film.ID_REALIS=star.ID_STAR "	 ;
    // - restriction utilisateur
    $sql .= " and CODE_TYPE_FILM=?";
    // - tri
    $sql .=  " order by TITRE_FILM; ";

    $result = $mysqlPDO->prepare($sql);
    $result->execute(array($typeVoulu));

    $data = $result->fetchAll();

    $result->closeCursor();
    VideoDAO::DisconnectVideo($mysqlPDO);

    return $data;
  }

  public static function ExisteAdherent($user, $password, $dataResa){
    $mysqlPDO = VideoDao::ConnectVideo($user, $password);

    $sql = "select * from adherent where NUM_ADHERENT= ? and NOM_ADHERENT= ?";
    $result = $mysqlPDO->prepare($sql);
    $result->execute(array($dataResa["numadherent"], $dataResa["nom"]));
    $data = $result->fetchAll();

    $nombre = count($data);

    $result->closeCursor();

    VideoDao::DisconnectVideo($mysqlPDO);

    return ($nombre != 0);

  }

  public static function ExisteResaPourCeClient($user, $password, $dataResa){
    $mysqlPDO = VideoDao::ConnectVideo($user, $password);

    $sql = "select * from location where NUM_ADHERENT = :numadherent and ID_FILM = :codfil and DEBUT_LOCATION = :libcejour" ;

    $result= $mysqlPDO->prepare($sql);
    $result->execute(array(':numadherent'=>$dataResa["numadherent"], ':codfil'=>$dataResa["codfil"], ':libcejour'=>$dataResa["libcejour"]));

    $data = $result->fetchAll();

    $nombre = count($data);

    $result->closeCursor();
    VideoDao::DisconnectVideo($mysqlPDO);

    return ($nombre !=0);
  }

  public static function InsereResa($user, $password, $dataResa){
    $mysqlPDO = VideoDao::ConnectVideo($user, $password);

    $sql = "insert into location (NUM_ADHERENT, ID_FILM, CODE_SUPPORT, DEBUT_LOCATION) values(:numadherent, :codfil ,\"D\", :libcejour)";

    $result =$mysqlPDO->prepare($sql);
    $result->execute(array(':numadherent'=>$dataResa["numadherent"], ':codfil'=>$dataResa["codfil"], ':libcejour'=>$dataResa["libcejour"]));

    $nombre= $result->rowCount();

    $result->closeCursor();
    VideoDao::DisconnectVideo($mysqlPDO);


  }

  public static function InsertNewFilm($user, $password, $film){
    try {
      $mysqlPDO = VideoDao::ConnectVideo($user, $password);

      $sql = "insert into film(ID_FILM, TITRE_FILM, ID_REALIS, CODE_TYPE_FILM, ANNEE_FILM, REF_IMAGE, RESUME) values (:ID_FILM, :TITRE_FILM, :ID_REALIS, :CODE_TYPE_FILM, :ANNEE_FILM, :REF_IMAGE, :RESUME);";

      $result =$mysqlPDO->prepare($sql);
      $result->execute(array(':ID_FILM'=>$film->getIdFilm(), ':TITRE_FILM'=>$film->getTitreFilm(), ':ID_REALIS'=>$film->getIdRealisateur(), ':CODE_TYPE_FILM'=>$film->getCodeTypeFilm(), ':ANNEE_FILM'=>$film->getAnneeFilm(), ':REF_IMAGE'=>$film->getRefImage(), ':RESUME'=>$film->getResume()));

      $nombre= $result->rowCount();

      $result->closeCursor();
      VideoDao::DisconnectVideo($mysqlPDO);


    }
    catch(Exception $e) {
      $result = $e->getMessage() ;
      // die('<h1>Erreur écriture en base de données : </h1>' . $e->getMessage());
    }
    finally {
      return $result;
  }

  }

}
 ?>
