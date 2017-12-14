<?php
class Produit{

  private $login;
  private $code;
  private $codecateg;
  private $nom;
  private $descriptif;
  private $unite;

  public function __construct($unLogin, $unCode, $unCodecateg, $unNom, $unDescriptif, $uneUnite){
    $this->login = $unLogin;
    $this->code = $unCode;
    $this->codecateg = $unCodecateg;
    $this->nom = $unNom;
    $this->descriptif = $unDescriptif;
    $this->unite = $uneUnite;
  }

  public function getLogin(){
    return $this->login;
  }
  public function setLogin($unLogin){
    $this->login = $unLogin;
  }
  public function getCode(){
    return $this->code;
  }
  public function setCode($unCode){
    $this->code = $unCode;
  }
  public function getCodeCateg(){
    return $this->codecateg;
  }
  public function setCodeCateg($unCodecateg){
    $this->codecateg = $unCodecateg;
  }
  public function getNom(){
    return $this->nom;
  }
  public function setNom($unNom){
    $this->nom = $unNom;
  }
  public function getDescriptif(){
    return $this->descriptif;
  }
  public function setDescriptif($unDescriptif){
    $this->descriptif = $unDescriptif;
  }
  public function getUnite(){
    return $this->unite;
  }
  public function setUnite($uneUnite){
    $this->unite = $uneUnite;
  }

}

?>
