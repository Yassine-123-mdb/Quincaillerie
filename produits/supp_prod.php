<?php
require_once('../controllers/produitsController.php');
$prodCtr=new produitController();
$prodCtr->delete($_GET['id']);
header("location:consulter_Prod.php");
?>