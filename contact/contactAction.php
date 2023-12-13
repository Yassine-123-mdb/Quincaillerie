<?php
include_once("../models/contact.php");
include_once("../controllers/contactsController.php");

$ContactController = new ContactController();
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];
    $Cont = new Contact($nom,$email, $msg);
    $success = $ContactController->insert($Cont);

    if ($success) {
        echo "<script>alert('Opération réussie !'); window.location.href='../Acceuil.html';</script>";

    } else {
        echo "<div style='background-color: #FFD2D2; color: #FF0000; padding: 10px; border: 1px solid #FF0000;'>";
        echo "Error adding Message";
        echo "</div>";
    }
    
?>