<?php
class Adherent{

  use hydrate();
  private $login;
  private $mdp;
  private $nom;
  private $prenom;

  public function __construct($unLogin, $unMdp, $unNom, $unPrenom){
    $this->login = $unLogin;
    $this->mdp = $unMdp;
    $this->nom = $unNom;
    $this->prenom = $unPrenom;
  }

  public function getLogin(){
    return $this->login;
  }
  public function setLogin($unLogin){
    $this->login = $unLogin;
  }
  public function getMdp(){
    return $this->mdp;
  }
  public function setMdp($unMdp){
    $this->mdp = $unMdp;
  }
  public function getNom(){
    return $this->nom;
  }
  public function setNom($unNom){
    $this->nom = $unNom;
  }
  public function getPrenom(){
    return $this->prenom;
  }
  public function setPrenom($unPrenom){
    $this->prenom = $unPrenom;
  }

}

?>
