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
      background-image: url(./image/bg_quinc.webp);
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

<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Quincaillerie</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Acceuil.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produits.php">Produit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact/contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/connect.php">admin</a>
          </li>
        </ul>
        <form class="d-flex" action="./produits/recherche.php" method="post">
            <input class="form-control me-2" type="search" name="nomp" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <button class="btn btn-outline-primary ms-2" routerLink="login">Connexion</button>
      </div>
    </div>
  </nav>

    <h3>Categorie:</h3>
    <div class="prod">
        <div class="produits-populaires">
            <div class="product-list">
            <div class="product-card horizontal-card">
                    <img class="card-img" src="./image/electricite.jfif" alt="Card image cap">
                    <div class="card-content">
                        <h5 class="card-title">Produits Electricite</h5>
                        <p class="card-text"> </p>
                        <a href="./produits/prod_elec.php" class="btn btn-primary">Chercher Votre Produit</a>
                    </div>
                </div>
                <div class="product-card horizontal-card">
                    <img class="card-img" src="./image/plombie.jfif" alt="Card image cap">
                    <div class="card-content">
                        <h5 class="card-title">Produit Plombier</h5>
                        <p class="card-text"></p>
                        <a href="./produits/prod_plombie.php" class="btn btn-primary">Chercher Votre Produit</a>
                    </div>
                </div>
                <div class="product-card horizontal-card">
                    <img class="card-img" src="./image/outillage.jfif" alt="Card image cap">
                    <div class="card-content">
                        <h5 class="card-title">Produits Outillage</h5>
                        <p class="card-text"> </p>
                        <a href="./produits/prod_outillage.php" class="btn btn-primary">Chercher Votre Produit</a>
                    </div>
                </div>
                <div class="product-card horizontal-card">
                    <img class="card-img" src="./image/mecanique.jfif" alt="Card image cap">
                    <div class="card-content">
                        <h5 class="card-title">Produits Mecanique</h5>
                        <p class="card-text"> </p>
                        <a href="./produits/prod_mecanique.php" class="btn btn-primary">Chercher Votre Produit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

