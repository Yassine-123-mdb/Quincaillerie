<?php
require_once('../controllers/commandesController.php');
$us = new CommandeController();
$res = $us->listeCmd();
?>
<?php
require_once('../controllers/contactsController.php');
$conCtr = new ContactController();
$cont = $conCtr->listeContact();
?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title> Admin Dashboard</title>
</head>

<body>
    <!-- ... (rest of your HTML remains unchanged) -->
</body>

</html>


<body>
    <style>  :root {
    --main-bg-color: #6a0dad; /* Violet color */
    --main-text-color: #009d63;
    --second-text-color: #0dbf7e;
    --second-bg-color: #c1efde;
  }

.primary-text {
  color: var(--main-text-color);
}

.second-text {
  color: var(--second-text-color);
}

.primary-bg {
  background-color: var(--main-bg-color);
}

.secondary-bg {
  background-color: var(--second-bg-color);
}

.rounded-full {
  border-radius: 100%;
}

#wrapper {
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

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin 0.25s ease-out;
  -moz-transition: margin 0.25s ease-out;
  -o-transition: margin 0.25s ease-out;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

#menu-toggle {
  cursor: pointer;
}

.list-group-item {
  border: none;
  padding: 20px 30px;
  color:black;
  
}
ul li a{
    color: black;
    font-weight: bold;
}
.list-group-item.active {
  background-color: transparent;
  color: var(--main-text-color);
  font-weight: bold;
  border: none;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}</style>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Quincaillerie</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>

<div class="list-group list-group-flush my-3">
    <a href="#clientManagement" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
        data-bs-toggle="collapse">
        <i class="fas fa-users me-2"></i>Users Management
    </a>
    <div class="collapse" id="clientManagement">
        <ul class="list-group">
            <li class="list-group-item"><a href="../clients/ajoutClient.php">Add Client</a></li>
            <li class="list-group-item"><a href="../clients/liste.php">View Clients</a></li>
        </ul>
    </div>

    <a href="#productManagement" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
        data-bs-toggle="collapse">
        <i class="fas fa-gift me-2"></i>Product Management
    </a>
    <div class="collapse" id="productManagement">
        <ul class="list-group">
            <li class="list-group-item"><a href="../produits/ajout.php">Add Product</a></li>
            <li class="list-group-item"><a href="../produits/consulter_Prod.php">View Products</a></li>
        </ul>
    </div>

    <a href="#orderManagement" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
        data-bs-toggle="collapse">
        <i class="fas fa-shopping-cart me-2"></i>Order Management
    </a>
    <div class="collapse" id="orderManagement">
        <ul class="list-group">
            <li class="list-group-item"><a href="../commandes/ajout_Com.php">Add Order</a></li>
            <li class="list-group-item"><a href="../commandes/listerCom.php">View Orders</a></li>
        </ul>
    </div>
    <a href="#adminManagement" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
                    data-bs-toggle="collapse">
                    <i class="fas fa-user-shield me-2"></i>Admin Management
                </a>
                <div class="collapse" id="adminManagement">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="../admin/ajoutadmin.php">Add Admin</a></li>
                        <li class="list-group-item"><a href="../admin/liste.php">View Admin</a></li>
                    </ul>
                </div>
</div>


                <a href="../Acceuil.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="../Acceuil.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php
                                require_once('../controllers/produitsController.php');
                                $nbprod=new ProduitController();
                                echo $nbprod->getNbProd();
                                ?></h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php
                                require_once('../controllers/commandesController.php');
                                $nbCom=new CommandeController();
                                echo $nbCom->getNbCom();?></h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
    <h3 class="fs-4 mb-3">Recent Orders</h3>
   

    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = $res->fetch()) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['idCom']; ?></th>
                            <td><?php echo $row['nomP']; ?></td>
                            <td><?php echo $row['clientName']; ?></td>
                            <td><?php echo $row['qte']; ?></td>
                            <td><?php echo '$' . $row['prix']; ?></td>
                            <td><?php echo  $row['dateC']; ?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <h3 class="fs-4 mb-3">Customer Message</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm table-hover">
            <thead>
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($con = $cont->fetch()) {
                        ?>
                        <tr>
                            
                            <td><?php echo $con['nom']; ?></td>
                            <td><?php echo $con['email']; ?></td>
                            <td><?php echo $con['message']; ?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>