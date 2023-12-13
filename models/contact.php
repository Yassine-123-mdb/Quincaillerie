<?php

class Contact {
    private $nom,$email, $msg;

    function __construct($nom, $email, $msg) {
        $this->nom = $nom;
        $this->email = $email;
        $this->msg = $msg;
    }

    // Getter methods
    public function getEmail() {
        return $this->email;
    }

    public function getMsg() {
        return $this->msg;
    }
    public function getNom(){
        return $this->nom;
    }

    // Setter methods (if needed)
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMsg($msg) {
        $this->msg = $msg;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
}
?>
