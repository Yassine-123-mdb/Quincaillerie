<?php
require_once('../controllers/ClientsController.php');
require_once('../models/Client.php');

$clientCtr = new ClientController();
$client = new Client();

$client->setId($_POST['id']);
$client->setNom($_POST['nom']);
$client->setPrenom($_POST['pr']);
$client->setTel($_POST['tel']);
$client->setAdr($_POST['adress']);
$client->setEmail($_POST['email']);
$client->setCom($_POST['com']);

$clientCtr->modifier_user($client);
header('Location: liste.php');
?>
