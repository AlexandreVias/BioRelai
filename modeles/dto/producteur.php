<?php

class Producteur extends Adherent {

  private $adresse;
  private $codePostal;
  private $ville;
  private $presentation;

  public function __construct($unLogin, $unMdp, $unNom, $unPrenom, $uneAdresse, $unCodePostal, $uneVille, $unePresentation){
    parent::__construct($unLogin, $unMdp, $unNom, $unPrenom);
    $this->adresse = $uneAdresse;
    $this->codePostal = $unCodePostal;
    $this->ville = $uneVille;
    $this->presentation = $unePresentation;
  }

  public function getAdresse(){
    return $this->adresse;
  }
  public function setAdresse($uneAdresse){
    $this->adresse = $uneAdresse;
  }
  public function getCodePostal(){
    return $this->codePostal;
  }
  public function setCodePostal($unCodePostal){
    $this->codePostal = $unCodePostal;
  }
  public function getVille(){
    return $this->ville;
  }
  public function setVille($uneVile){
    $this->ville = $uneVile;
  }
  public function getPresentation(){
    return $this->presentation;
  }
  public function setPresentation($unePresentation){
    $this->presentation = $unePresentation;
  }

}

?>
