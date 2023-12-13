<?php
include_once("../database/config.php");

class ProduitController extends Connexion {
    public $id, $nom, $decs, $prix, $qte,$cat,$img ;

    function __construct() {
        parent::__construct();
    }

    function insert(Produit $p) {
        $query = "INSERT INTO produits(id, nom, decs, prix, qte, catrgorie,img) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($p->getId(), $p->getNom(), $p->getDecs(), $p->getPrix(), $p->getQte(), $p->getCat(),$p->getImg());
        return $res->execute($aryy);
    }

    function listeProd() {
        $query = "SELECT * FROM produits";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function listeProdElec() {
        $query = "SELECT * FROM produits WHERE catrgorie='Electricite'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function listeProdPlomb() {
        $query = "SELECT * FROM produits WHERE catrgorie='plombier'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function listeProdOut() {
        $query = "SELECT * FROM produits WHERE catrgorie='Outillage'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function listeProdMeca() {
        $query = "SELECT * FROM produits WHERE catrgorie='Mecanique'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function delete($idprod) {
        $query = "DELETE FROM produits WHERE id=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idprod));
    }

    function update(Produit $p) {
        $query = "UPDATE produits SET nom=?, decs=?, prix=?, qte=?, catrgorie=?, img=? WHERE id=?";
        $res = $this->pdo->prepare($query);
        $aryy = array($p->getNom(), $p->getDecs(), $p->getPrix(), $p->getQte(), $p->getCat(), $p->getImg(), $p->getId());
        return $res->execute($aryy);
    }

    function getProduct($id) {
        $query = "SELECT * FROM produits WHERE id=?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        return $res->fetch();
    }
    function getProd($nom){
        $query="SELECT * FROM produits WHERE nom=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($nom));
        return $res->fetch();
    }
    function getNbProd() {
        
            $query = "SELECT COUNT(*) AS total FROM produits";
            $res = $this->pdo->prepare($query);
            $res->execute();
            $result = $res->fetch();
            return $result['total'];
            
           
    }
    
}
?>
