<?php
include_once("../database/config.php");

class ContactController extends Connexion {
    public $nom, $email, $msg;

    function __construct() {
        parent::__construct();
    }

    function insert(Contact $Contact) {
        $query = "INSERT INTO contact(nom,email, message) VALUES (?, ?, ?)";
        $res = $this->pdo->prepare($query);  
        $aryy = array($Contact->getNom(), $Contact->getEmail(), $Contact->getMsg());
        return $res->execute($aryy);
    }

    function listeContact() {
        $query = "SELECT * FROM contact";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function getContact($email){
        $query="SELECT * FROM Contact WHERE email$email=?";
        $res=$this->pdo->prepare($query);
        $res->execute(array($email));
        return $res->fetch();
    }

    function deleteContact($email) {
        $query = "DELETE FROM Contacte WHERE email$email=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($email));
    }

    function update(Contact $admin) {
        $query = "UPDATE admine SET nom=?, msg=? WHERE email$email=?";
        $res = $this->pdo->prepare($query);

        $aryy = array($admin->getNom(), $admin->getmsg(), $admin->getEmail());
        return $res->execute($aryy);
    }
    
    function chekAdmin($email, $msg) {
        $query = "SELECT * FROM admine WHERE email$email = ? AND msg=? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($email,$msg));
        return $res->fetch(PDO::FETCH_ASSOC);
    }
}
?>
