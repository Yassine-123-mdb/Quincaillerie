<?php
require_once('../controllers/CommandesController.php');
require_once('../models/Commande.php');

$commandeCtr = new CommandeController();
$commande = new Commande();

$commande->setId($_POST['id']);
$commande->setProd($_POST['prod']);
$commande->setQte($_POST['qte']);
$commande->setPrix($_POST['prix']);
$commande->setDate($_POST['date']);
$commande->setClientName($_POST['client']);

$commandeCtr->update($commande);
header('Location: listerCom.php');
?>
