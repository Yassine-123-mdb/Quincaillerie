<?php
require_once('../controllers/ClientsController.php');
$clientCtr = new ClientController();
$res = $clientCtr->getClient($_GET['idcl']); // Assurez-vous que vous avez une méthode getClient dans votre ClientController

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Client pour Quincaillerie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
      overflow-x: hidden;
      background-image: linear-gradient(
        to right,
        #22f596,
        #2ff59b,
        #7affc3,
        #b169fa,
        #aa54ff
      );
    }
        label {
            color: white;
        }
        h1 {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Modifier un Client pour Quincaillerie</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="modification.php" method="post">
                    <div class="form-group">
                        <label for="idClient">ID du Client</label> 
                        <input type="text" class="form-control" name="id" id="idClient" value="<?php echo $res['idcl']; ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nomClient">Nouveau Nom du Client</label>
                        <input type="text" class="form-control" name="nom" id="nomClient" value="<?php echo $res['nom']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="prenomClient">Nouveau Prénom du Client</label>
                        <input type="text" class="form-control" name="pr" id="prenomClient" value="<?php echo $res['prenom']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telClient">Nouveau Numéro de téléphone</label>
                        <input type="tel" class="form-control" name="tel" id="telClient" value="<?php echo $res['tel']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="adressClient">Nouvelle Adresse</label>
                        <input type="text" class="form-control" name="adress" id="adressClient" value="<?php echo $res['adress']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="emailClient">Nouvelle Adresse Email</label>
                        <input type="email" class="form-control" name="email" id="emailClient" value="<?php echo $res['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="idCom">Nouvel ID de Commande</label>
                        <input type="tel" class="form-control" name="com" id="idCom" value="<?php echo $res['idprod']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier le Client</button>
                </form>
                <div class="mt-3">
                    <a href="../admin/admin.php" class="btn btn-secondary">Back to Admin Page</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
