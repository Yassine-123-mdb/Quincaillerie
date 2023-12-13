<?php
require_once('../models/produit.php');
require_once('../controllers/produitsController.php'); 
$prodCtr = new ProduitController();
$prod = new produit();
$prod->setId($_POST['id']);
$prod->setNom($_POST['nom']);
$prod->setDecs($_POST['desc']);
$prod->setPrix($_POST['prix']);
$prod->setQte($_POST['qte']);
$prod->setCat($_POST['categorie']);  // Set the value for 'cat' attribute
$prod->setImg($_POST['img']);

$prodCtr->update($prod);
header("location:consulter_Prod.php");
?>
