<?php

require_once('../controllers/adminController.php');
$admCtr=new AdminController();
$admCtr->deleteAdmin($_GET['logi']);
header('Location:liste.php');
?>
