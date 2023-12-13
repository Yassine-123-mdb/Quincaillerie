<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
<section class="">
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              The best offer <br />
              <span class="text-primary">for your business</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Please enter your login credentials to access your account. If you don't have an account, you can
              <a href="/signup" class="text-primary">sign up here</a>.
            </p>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form action="connexion.php" method="post">
                
                  <div class="form-outline mb-4">
                    <input type="text" name="login" class="form-control"  required>
                    <label class="form-label" for="form3Example3">Login</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" name="mdp"  class="form-control" minlength="4" required>
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div>
                  <div class="text-err" *ngIf="erreur">
                    <p>Login et/ou mot de passe incorrect</p>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block mb-4" >
                    Connexion
                  </button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
