<?php

require_once('../controllers/ClientsController.php');
$clientCtr=new ClientController();
$clientCtr->delete($_GET['idcl']);
header('Location:liste.php');
?>
