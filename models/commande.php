<?php

class Commande {
    private $id, $prod, $qte, $prix, $date, $clientName;
    function __construct($id = "", $prod = "", $qte = "", $prix = "", $date = "", $clientName = "") {
        $this->id = $id;
        $this->prod = $prod;
        $this->qte = $qte;
        $this->prix = $prix;
        $this->date = $date;
        $this->clientName = $clientName;
    }

    public function getId() {
        return $this->id;
    }

    public function getProd() {
        return $this->prod;
    }

    public function getQte() {
        return $this->qte;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getDate() {
        return $this->date;
    }

    public function getClientName() {
        return $this->clientName;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setProd($prod) {
        $this->prod = $prod;
    }

    public function setQte($qte) {
        $this->qte = $qte;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setClientName($clientName) {
        $this->clientName = $clientName;
    }
}
?>
