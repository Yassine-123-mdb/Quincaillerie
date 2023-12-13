<?php
require_once('../controllers/adminController.php');
require_once('../models/admine.php');

$adminCtr = new adminController();
$admin = new Admin($nom,$logi,$mdp);

$admin->setNom($_POST['nom']);
$admin->setLogi($_POST['logi']);
$admin->setMdp($_POST['mdp']);


$adminCtr->update($admin);
header('Location: liste.php');
?>
