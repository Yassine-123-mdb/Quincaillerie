<?php
require_once('../controllers/ClientsController.php');
$us=new ClientController();
$res = $us->listeCl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
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
    <h3 class="tit">Liste Des Clients</h3>
    <div class="container">
        <form action='' method='post'> <!-- Adjust the form action accordingly -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID Client</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Tel</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($l = $res->fetch()) { ?>
                        <tr>
                            <td><?php echo $l['idcl']; ?></td>
                            <td><?php echo $l['nom']; ?></td>
                            <td><?php echo $l['prenom']; ?></td>
                            <td><?php echo $l['tel']; ?></td>
                            <td><?php echo $l['adress']; ?></td>
                            <td><?php echo $l['email']; ?></td>
                            <td><a href ='modif.php?idcl=<?php echo$l['idcl'] ?>' class="btn btn-info">Modifier</a><a href ='sup.php?idcl=<?php echo$l['idcl'] ?>' class="btn btn-info">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="mt-3">
                    <a href="../admin/admin.php" class="btn btn-secondary">Back to Admin Page</a>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
