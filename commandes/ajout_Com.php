<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Commande</title>
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
        <h1 class="text-center">Ajouter une Commande</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="ajout.php" method="post"> <!-- Assurez-vous de mettre le bon chemin d'action -->
                    <div class="form-group">
                        <label for="idCommande">ID de la Commande</label> 
                        <input type="text" class="form-control" name="id" id="idCommande" placeholder="ID de la commande" required>
                    </div>
                    <div class="form-group">
                        <label for="produitCommande">Nom du Produit</label>
                        <input type="text" class="form-control" name="produit"  placeholder="Nom du produit" required>
                    </div>
                    <div class="form-group">
                        <label for="clCommande">Nom du Client</label>
                        <input type="text" class="form-control" name="client"  placeholder="Nom du Client" required>
                    </div>
                    <div class="form-group">
                        <label for="quantiteCommande">Quantité</label>
                        <input type="number" class="form-control" name="quantite"  placeholder="Quantité" required>
                    </div>
                    <div class="form-group">
                        <label for="prixCommande">Prix</label>
                        <input type="text" class="form-control" name="prix"  placeholder="Prix" required>
                    </div>
                    <div class="form-group">
                        <label for="dateCommande">Date de la Commande</label>
                        <input type="date" class="form-control" name="date" placeholder="Date de la commande" required>
                    </div>
                    <!-- Ajoutez d'autres champs nécessaires pour votre commande -->
                    <button type="submit" class="btn btn-primary">Ajouter la Commande</button>
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
