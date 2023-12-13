<?php

class Client {
    private $id, $nom, $prenom, $tel, $adr, $email, $com;

    function __construct($id = "", $nom = "", $prenom = "", $tel = "", $adr = "", $email = "", $com = "") {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->adr = $adr;
        $this->email = $email;
        $this->com = $com;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getAdr() {
        return $this->adr;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCom() {
        return $this->com;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setAdr($adr) {
        $this->adr = $adr;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCom($com) {
        $this->com = $com;
    }
}
?>
