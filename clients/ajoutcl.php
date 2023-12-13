<?php
require_once('../controllers/ClientsController.php');
require_once('../models/Client.php'); 
$id = $_POST["id"];
$nom = $_POST["nom"];
$pr = $_POST["pr"];
$tel = $_POST["tel"];
$adr = $_POST["adress"];
$email = $_POST["email"];
$com=$_POST["com"];
$client=new Client($id, $nom, $pr, $tel,$adr,$email,$com);
$clientCtr=new ClientController();

$res=$clientCtr->insert($client);
header('location: liste.php');


?>