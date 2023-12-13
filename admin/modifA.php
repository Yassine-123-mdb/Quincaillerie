<?php
require_once('../controllers/adminController.php');
require_once('../models/admine.php');
$adminCtr=new adminController();
$admin=$adminCtr->getAdmin($_GET['logi']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
    body {
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
</style>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Modify Admin</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="modifAdmin.php" method="post">
                <div class="form-group">
                        <label for="log">New Name</label>
                        <input type="text" class="form-control" value="<?php echo $admin['nom']; ?>" name="nom" id="log" required>
                    </div>
                    <div class="form-group">
                        <label for="log">New Login</label>
                        <input type="text" class="form-control" value="<?php echo $admin['logi']; ?>" name="logi" id="log" required>
                    </div>
                    <div class="form-group">
                        <label for="mdp">PassWord</label>
                        <input type="password" class="form-control" name="mdp" id="mdp" value="<?php echo $admin['mdp']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifiy Admin</button>
                </form>
                <div class="mt-3">
                    <a href="admin.php" class="btn btn-secondary">Back to Admin Page</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
