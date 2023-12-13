<?php
include_once("../models/admine.php");
include_once("../controllers/adminController.php");

$adminController = new AdminController();
    $nom = $_POST["nom"];
    $log = $_POST["log"];
    $mdp = $_POST["mdp"];
 
    $admin = new Admin($nom,$log, $mdp);

    $success = $adminController->insert($admin);

    if ($success) {
        header('location:liste.php');
    } else {
        echo "<div style='background-color: #FFD2D2; color: #FF0000; padding: 10px; border: 1px solid #FF0000;'>";
        echo "Error adding admin";
        echo "</div>";
    }
    
?>