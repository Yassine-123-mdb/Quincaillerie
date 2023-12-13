<?php
require_once('../controllers/produitsController.php');
$us=new ProduitController();
$res = $us->listeProdElec();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .prod {
            padding: 20px;
        }
        body {
      background-image: url("../image/bg_quinc.webp");
      background-size: cover; 
      background-repeat: no-repeat; 
      background-attachment: fixed; 
      background-position: center center; 
      color: white; 
    }
    h3{
        padding:5px;
        font-weight:bold;
        text-decoration:underline;
        color:#59ebd7;
    }
    .navbar-brand{
    color:rgb(155, 167, 219);
    }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-card {
            display: flex;
            flex-direction: column;
            border: 1px solid #831414;
            margin: 10px;
            padding: 10px;
            background-color: #fcd453;
            width: 250px;
            
        }

        .card-img {
            max-width: 100%;
        }

        .card-content {
            flex: 1;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            color: #555;
        }

        .btn {
            background-color: #248565;
            color: #ffffff;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Quincaillerie</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../Acceuil.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../produits.php">Produit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact/contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/connect.php">admin</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <button class="btn btn-outline-primary ms-2" routerLink="login">Connexion</button>
      </div>
    </div>
  </nav>

    <h3>Produit Electricite</h3>
    <div class="prod">
  <div class="produits-populaires">
    <div class="product-list">
      <?php while ($l = $res->fetch()) { ?>
        <div class="product-card horizontal-card">
          <img class="card-img" src="../image/<?php echo $l['img']; ?>" alt="Card image cap">
          <div class="card-content">
            <h5 class="card-title"><?php echo $l['nom']; ?></h5>
            <h5 class="card-title">Prix:<?php echo $l['prix']; ?></h5>
            <p class="card-text"><?php echo $l['decs']; ?> </p>
            <a routerLink="/electricite" class="btn btn-primary">acheter</a>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
</div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

