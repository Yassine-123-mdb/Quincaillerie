<?php
include_once("../models/admine.php");
include_once("../controllers/adminController.php");

$adminController = new AdminController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $admin = $adminController->chekAdmin($login, $mdp);
    if ($admin) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Invalid login credentials.";
    }
}
?>