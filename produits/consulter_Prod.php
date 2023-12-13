<?php
require_once('../controllers/produitsController.php');
$us=new ProduitController();
$res = $us->listeProd();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
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
<h3 class="tit">Liste Des Produits</h3>
<div class="container">
    <form action='' method='post'>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>code</th>
                <th>nom de produit</th>
                <th>description </th>
                <th>prix</th>
                <th>Quantite</th>
                <th>categorie</th>
                <th>Image</th>
                <th>Actions</th> <!-- New column for the "Modifier" button -->
            </tr>
            </thead>
            <tbody>
            <?php while ($l = $res->fetch()) { ?>
                <tr>
                    <td><?php echo $l[0]; ?></td>
                    <td><?php echo $l[1]; ?></td>
                    <td><?php echo $l[2]; ?></td>
                    <td><?php echo $l[3]; ?></td>
                    <td><?php echo $l[4]; ?></td>
                    <td><?php echo $l[5]; ?></td>
                    <td><img style="width:100px;" src="../image/<?php echo $l[6]; ?>" alt="" ></td>
                    <td><a href="modifier_Prod.php?id=<?php echo $l[0]; ?>" class="btn btn-info">Modifier</a><a href="supp_prod.php?id=<?php echo $l[0]; ?>" class="btn btn-info">Supprimer</a></td>                </tr>
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
