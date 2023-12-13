<?php
include_once("../database/config.php");

class ClientController extends Connexion {
    public $id, $nom, $prenom, $tel, $adr, $email, $com;

    function __construct() {
        parent::__construct();
    }

    function insert(Client $c) {
        $query = "INSERT INTO clients(idcl, nom, prenom, tel, adress, email, idprod) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $aryy = array($c->getId(), $c->getNom(), $c->getPrenom(), $c->getTel(), $c->getAdr(), $c->getEmail(), $c->getCom());
        return $res->execute($aryy);
    }
    function getClient($id){
        $query="SELECT * FROM clients WHERE idcl = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array= $res->fetch();
        return $array;
    }
    function listeCl() {
        $query = "SELECT * FROM clients";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function delete($idClient) {
        $query = "delete from clients where idcl=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idClient));
        }
    function modifier_user(Client $c) {
        $query = "UPDATE clients SET nom=?, prenom=?, tel=?, adress=?, email=?, idprod=? WHERE idcl=?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($c->getNom(), $c->getPrenom(), $c->getTel(), $c->getAdr(), $c->getEmail(), $c->getCom(), $c->getId()));
        
    }
}
?>
