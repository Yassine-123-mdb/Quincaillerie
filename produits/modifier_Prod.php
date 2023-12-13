
<?php
require_once('../controllers/produitsController.php');
$prod=new produitController();
$product=$prod->getProduct($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Produit pour Quincaillerie</title>
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
        <h1 class="text-center">Modifier un Produit pour Quincaillerie</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="modifier.php" method="post"> <!-- Removed action attribute to submit to the same page -->
                    <div class="form-group">
                        <label for="idProduit">ID du Produit</label> 
                        <input type="text" class="form-control" name="id" id="idProduit" value="<?php echo $product['id']; ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="nomProduit">Nouveau Nom du Produit</label>
                        <input type="text" class="form-control" name="nom" id="nomProduit" value="<?php echo $product['nom']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Nouvelle Description</label>
                        <textarea class="form-control" id="description" name="desc" rows="4" required><?php echo $product['decs']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="prix">Nouveau Prix</label>
                        <input type="number" class="form-control" name="prix" id="prix" value="<?php echo $product['prix']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Nouvelle Quantite en Stock</label>
                        <input type="number" class="form-control" name="qte" value="<?php echo $product['qte']; ?>" required>
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
                        <input type="text" class="form-control" value="<?php echo $product['img']; ?>" name="img" id="nomimg" placeholder="Nom du img.****" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier le Produit</button>
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