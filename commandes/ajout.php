<?php
require_once('../models/commande.php');
require_once('../controllers/commandesController.php');

$id = $_POST["id"];
$prod = $_POST["produit"];
$qte = $_POST["quantite"];
$prix= $_POST["prix"];
$date = $_POST["date"];
$cl=$_POST['client'];
$cmd = new commande($id, $prod, $qte, $prix, $date,$cl);
$comctr=new CommandeController();
$res=$comctr->insertc($cmd);
if($res){
    header('Location:listerCom.php');
    echo 'insertion valide';
    }
?>
