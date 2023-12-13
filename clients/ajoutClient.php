<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Client</title>
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
        <h1 class="text-center">Add  Client</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="ajoutcl.php" method="post"> 
                    <div class="form-group">
                        <label for="idClient">ID Client</label> 
                        <input type="text" class="form-control" name="id" id="idClient" placeholder="ID du client" required>
                    </div>
                    <div class="form-group">
                        <label for="nomClient">First_Name client</label>
                        <input type="text" class="form-control" name="nom"  placeholder="Nom du client" required>
                    </div>
                    <div class="form-group">
                        <label for="prenomClient">Last_Name client</label>
                        <input type="text" class="form-control" name="pr"  placeholder="Prenom du client" required>
                    </div>
                    <div class="form-group">
                        <label for="telClient">Numero telephone</label>
                        <input type="tel" class="form-control" name="tel"  placeholder="Numéro de telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="addressClient">Adress</label>
                        <input type="text" class="form-control" name="adress" placeholder="Adresse" required>
                    </div>
                    <div class="form-group">
                        <label for="emailClient">Adress Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="Adresse Email" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Ajouter le Client</button>
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
