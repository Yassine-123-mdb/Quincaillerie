<?php

class Produit {
    private $id, $nom, $decs, $prix, $qte,$cat,$img;

    function __construct($id = "", $nom = "", $decs = "", $prix = "", $qte = "",$cat="",$img="") {
        $this->id = $id;
        $this->nom = $nom;
        $this->decs = $decs;
        $this->prix = $prix;
        $this->qte = $qte;
        $this->cat = $cat;
        $this->img = $img;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDecs() {
        return $this->decs;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getQte() {
        return $this->qte;
    }
    public function getCat() {
        return $this->cat;
    }
    public function getImg() {
        return $this->img;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDecs($decs) {
        $this->decs = $decs;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setQte($qte) {
        $this->qte = $qte;
    }
    public function setCat($cat) {
        $this->cat = $cat;
    }
    public function setImg($img) {
        $this->img = $img;
    }
}
?>
