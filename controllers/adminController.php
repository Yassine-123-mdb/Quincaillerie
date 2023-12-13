<?php
include_once("../database/config.php");

class AdminController extends Connexion {
    public $nom, $logi, $mdp;

    function __construct() {
        parent::__construct();
    }

    function insert(Admin $admin) {
        $query = "INSERT INTO admine(nom,logi, mdp) VALUES (?, ?, ?)";
        $res = $this->pdo->prepare($query);  
        $aryy = array($admin->getNom(), $admin->getLogi(), $admin->getMdp());
        return $res->execute($aryy);
    }

    function listeAdmin() {
        $query = "SELECT * FROM admine";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function getAdmin($logi){
        $query="SELECT * FROM admine WHERE logi=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($logi));
        return $res->fetch();
    }

    function deleteAdmin($logi) {
        $query = "DELETE FROM admine WHERE logi=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($logi));
    }

    function update(Admin $admin) {
        $query = "UPDATE admine SET nom=?, mdp=? WHERE logi=?";
        $res = $this->pdo->prepare($query);

        $aryy = array($admin->getNom(), $admin->getMdp(), $admin->getLogi());
        return $res->execute($aryy);
    }
    
    function chekAdmin($logi, $mdp) {
        $query = "SELECT * FROM admine WHERE logi = ? AND mdp=? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($logi,$mdp));
        return $res->fetch(PDO::FETCH_ASSOC);
    }
}
?>
