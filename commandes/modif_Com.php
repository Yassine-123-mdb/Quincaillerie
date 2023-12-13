<?php
require_once('../controllers/commandesController.php');
$commande = new CommandeController();
$res = $commande->getCom($_GET['idCom']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Commande pour Quincaillerie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
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
        <h1 class="text-center">Modifier une Commande pour Quincaillerie</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="modifier_Com.php" method="post">
                    <div class="form-group">
                        <label for="idCommande">ID de la Commande</label>
                        <input type="text" class="form-control" name="id" id="idCommande" value="<?php echo $res['idCom']; ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="prodCommande">Nouveau Produit</label>
                        <input type="text" class="form-control" name="prod" id="prodCommande" value="<?php echo $res['nomP']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="clientCommande">Nouveau Nom du Client</label>
                        <input type="text" class="form-control" name="client" id="clientCommande" value="<?php echo $res['clientName']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="qteCommande">Nouvelle Quantité</label>
                        <input type="text" class="form-control" name="qte" id="qteCommande" value="<?php echo $res['qte']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="prixCommande">Nouveau Prix</label>
                        <input type="text" class="form-control" name="prix" id="prixCommande" value="<?php echo $res['prix']; ?>" required>
                    </div>
                    <div class="form-"group>
                        <label for="dateCommande">Nouvelle Date</label>
                        <input type="date" class="form-control" name="date" id="dateCommande" value="<?php echo $res['dateC']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier la Commande</button>
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
