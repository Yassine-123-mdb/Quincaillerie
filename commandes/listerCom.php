<?php
require_once('../controllers/commandesController.php');
$us = new CommandeController();
$res = $us->listeCmd();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Commandes</title>
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
        form {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
        }
        .tit{
          text-align: center;  
        }
    </style>
</head>
<body>
    <h3 class="tit">Liste Des Commandes</h3>
    <div class="container">
        <form action='' method='post'> <!-- Adjust the form action accordingly -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID Commande</th>
                        <th>Nom Produit</th>
                        <th>Nom Client</th>
                        <th>Quantite</th>
                        <th>Prix de 1 piece</th> 
                        <th>Prix de commande</th> 
                        <th>date Commande</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($l = $res->fetch()) { ?>
                        <tr>
                            
                            <td><?php echo $l['idCom']; ?></td>
                            <td><?php echo $l['nomP']; ?></td>
                            <td><?php echo $l['clientName']; ?></td>
                            <td><?php echo $l['qte']; ?></td>
                            <td><?php echo $l['prix']; ?>dt</td>
                            <td><?php echo $l['prix'] * $l['qte']?>dt</td>
                            <td><?php echo $l['dateC']; ?></td>
                            <td><a href="modif_Com.php?idCom=<?php echo $l['idCom']; ?>" class="btn btn-info">Modifier</a><a href="supp_Com.php?idCom=<?php echo $l['idCom']; ?>" class="btn btn-info">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </form>
        <div class="mt-3">
                    <a href="../admin/admin.php" class="btn btn-secondary">Back to Admin Page</a>
                </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
