<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit pour Quincaillerie</title>
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
        <h1 class="text-center">Ajouter un Produit pour Quincaillerie</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="ajoutprod.php" method="post">
                    <div class="form-group">
                        <label for="idProduit">ID du Produit</label>
                        <input type="text" class="form-control" name="id" id="idProduit" placeholder="id du produit" required>
                    </div>
                    <div class="form-group">
                        <label for="nomProduit">Nom du Produit</label>
                        <input type="text" class="form-control" name="nom" id="nomProduit" placeholder="Nom du produit" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="desc" rows="4" placeholder="Description du produit" required></textarea>
                    </div><
                    <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="number" class="form-control" name="prix" id="prix" placeholder="Prix du produit" required>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantite en Stock</label>
                        <input type="number" class="form-control" name="qte" placeholder="Quantite en stock" required>
                    </div>
                    <div class="form-group">
                        <label for="categorie">Categorie de produit</label>
                        <select class="form-control" name="categorie" id="categorie" required>
                            <option value="outillage">Outillage</option>
                            <option value="mecanique">Mecanique</option>
                            <option value="electricite">Electricite</option>
                            <option value="plombier">Plombier</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nomimg">Nom d'image</label>
                        <input type="text" class="form-control" name="img" id="nomimg" placeholder="Nom du img.****" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter le Produit</button>
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
