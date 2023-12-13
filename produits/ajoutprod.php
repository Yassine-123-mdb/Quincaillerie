<?php
require_once('../models/produit.php');
require_once('../controllers/produitsController.php');
$us = new produit();
$id = $_POST["id"];
$nom = $_POST["nom"];
$decs = $_POST["desc"];
$prix = $_POST["prix"];
$qte = $_POST["qte"];
$cat=$_POST["categorie"];
$img=$_POST["img"];
$produit=new produit($id, $nom, $decs, $prix, $qte,$cat,$img);
$prod_ctr=new ProduitController();

$res=$prod_ctr->insert($produit);
header('location:consulter_Prod.php');

?>
