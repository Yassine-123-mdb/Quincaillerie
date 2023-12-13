<?php

class Admin {
    private $nom,$logi, $mdp;

    function __construct($nom, $logi, $mdp) {
        $this->nom = $nom;
        $this->logi = $logi;
        $this->mdp = $mdp;
    }

    // Getter methods
    public function getLogi() {
        return $this->logi;
    }

    public function getMdp() {
        return $this->mdp;
    }
    public function getNom(){
        return $this->nom;
    }

    // Setter methods (if needed)
    public function setLogi($logi) {
        $this->logi = $logi;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
}
?>
