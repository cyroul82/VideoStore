<?php
class Film {
  private $ID_FILM;
  private $CODE_TYPE_FILM;
  private $ID_REALIS;
  private $TITRE_FILM;
  private $ANNEE_FILM;
  private $REF_IMAGE;
  private $RESUME;

  public function __construct(){}

    public function setIdFilm($ID_FILM){
      $this->ID_FILM = $ID_FILM;
    }
    public function setTitreFilm($TITRE_FILM){
      $this->TITRE_FILM =$TITRE_FILM ;
    }
    public function setCodeTypeFilm($CODE_TYPE_FILM){
      $this->CODE_TYPE_FILM = $CODE_TYPE_FILM;
    }
    public function setIdRealisateur($ID_REALIS){
      $this->ID_REALIS = $ID_REALIS;
    }
    public function setAnneeFilm($ANNEE_FILM){
      $this->ANNEE_FILM = $ANNEE_FILM;
    }
    public function setRefImage($REF_IMAGE){
      $this->REF_IMAGE = $REF_IMAGE;
    }
    public function setResume($RESUME){
      $this->RESUME = $RESUME;
    }

  public function getIdFilm(){
    return $this->ID_FILM;
  }
  public function getTitreFilm(){
    return $this->TITRE_FILM;
  }
  public function getCodeTypeFilm(){
    return $this->CODE_TYPE_FILM;
  }
  public function getIdRealisateur(){
    return $this->ID_REALIS;
  }
  public function getAnneeFilm(){
    return $this->ANNEE_FILM;
  }
  public function getRefImage(){
    return $this->REF_IMAGE;
  }
  public function getResume(){
    return $this->RESUME;
  }



} ?>
