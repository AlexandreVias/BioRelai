<?php
class DBConnex extends PDO{

	private static $instance;

	public static function getInstance(){
		if ( !self::$instance ){
			self::$instance = new DBConnex();
		}
		return self::$instance;
	}

	function __construct(){
		try {
			parent::__construct(Param::$dsn ,Param::$user, Param::$pass);
		} catch (Exception $e) {
			echo $e->getMessage();
			die("Impossible de se connecter. " );
		}
	}

	public function __destruct(){
		if(!is_null(self::$instance)){
			self::$instance = null;
		}
	}

	public function queryFetchAll($sql){
		$sth  =$this->query($sql);

		if ( $sth ){
			return $sth -> fetchAll(PDO::FETCH_ASSOC);
		}

		return false;
	}

	public function queryFetchFirstRow($sql){
		$sth    = $this->query($sql);
		$result    = array();

		if ( $sth ){
			$result  = $sth -> fetch(PDO::FETCH_ASSOC);
		}

		return $result;
	}

	public function insert($sql){
		if ( $this -> exec($sql) > 0 ){
			return 1;
			//$this->lastInsertId();
		}
		return false;
	}

	public function update($sql){
		return $this->exec($sql) ;
	}

	public function delete($sql){
		return $this->exec($sql) ;
	}
}

class AdherentDAO{

	public static function verification($unAdherent){
			$sql = "SELECT * FROM ADHERENT WHERE LOGIN = '" . $unAdherent->getLogin() . "' AND  MOTDEPASSE = '" .  md5($unAdherent->getMdp()) ."';";
			$login = DBConnex::getInstance()->queryFetchFirstRow($sql);
			return $login;
}
}

class ProduitDAO{
public static function($unProducteur){
	$sql = "select code, codecateg, nom, descriptif, unite from PRODUIT where login =" . $unProducteur->getLogin();
	$lesproduits = DBConnex::getInstance()->queryFetchAll($sql);
	if (!empty($producteurs)) {
	$result = [];
	foreach ($lesproduits as $produit) {
		$unProduit = new Produit($produit['CODE'], $produit['CODECATEG'], $produit['NOM'], $produit['DESCRIPTIF'], $produit['UNITE']);
		$unProduit->hydrate($produit);
		$result[] = $unProduit;
	}
	return $result;
}else {
	return false;
}
}
}
