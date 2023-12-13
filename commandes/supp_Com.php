<?php

require_once('../controllers/commandesController.php');
$clientCtr=new commandeController();
$clientCtr->delete($_GET['idCom']);
header('Location:listerCom.php');
?>
