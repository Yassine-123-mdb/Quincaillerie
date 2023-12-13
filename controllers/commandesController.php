<?php
include_once("../database/config.php");

class CommandeController extends Connexion {
    public $id, $prod, $qte, $prix, $date,$cl;

    function __construct() {
        parent::__construct();
    }

    function insertc(Commande $c) {
        $query = "INSERT INTO commande(idCom, nomP, qte, prix, dateC,clientName) VALUES (?, ?, ?, ?, ?,?)";
        $res = $this->pdo->prepare($query);

        $aryy = array($c->getId(), $c->getProd(), $c->getQte(), $c->getPrix(), $c->getDate(),$c->getClientName());
        return $res->execute($aryy);
    }

    function listeCmd() {
        $query = "SELECT * FROM commande";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function delete($idCmd) {
        $query = "DELETE FROM commande WHERE idCom=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idCmd));
    }

    function update(Commande $c) {
        $query = "UPDATE commande SET nomP=?, clientName=?, qte=?, prix=?, dateC=? WHERE idCom=?";
        $res = $this->pdo->prepare($query);

        $aryy = array($c->getProd(),$c->getClientName(), $c->getQte(), $c->getPrix(), $c->getDate(), $c->getId());
        return $res->execute($aryy);
    }

    function getCom($id) {
        $query = "SELECT * FROM commande WHERE idCom=?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array= $res->fetch();
        return $array;
    }
    function getNbCom() {
        
        $query = "SELECT COUNT(*) AS total FROM commande";
        $res = $this->pdo->prepare($query);
        $res->execute();
        $result = $res->fetch();
        return $result['total'];
        
       
}
}
?>
