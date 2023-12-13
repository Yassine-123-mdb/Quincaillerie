<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-size: 100%;
            font-family: 'Lato', sans-serif;
        }

        div,
        textarea,
        input {
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            min-width: 500px;
            margin: 10px auto 0px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-bottom: 3px solid #ccc;
        }

        .row {
            width: 100%;
            margin: 0 0 1em 0;
            padding: 0 2.5em;
        }

        .row.header {
            padding: 1.5em 2.5em;
            border-bottom: 1px solid #ccc;
            background: url(https://images2.imgbox.com/a5/2e/m3lRbCCA_o.jpg) left -80px;
            color: #fff;
        }

        .row.body {
            padding: .5em 2.5em 1em;
        }

       

        h1 {
            font-family: 'Lato', sans-serif;
            display: inline-block;
            font-weight: 100;
            font-size: 2.8125em;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            margin: 0 0 0.1em 0;
            padding: 0 0 0.4em 0;
        }

        h3 {
            font-family: 'Lato', sans-serif;
            font-size: 1.25em;
            margin: 1em 0 0.4em 0;
        }

        .btn {
            font-size: 1.0625em;
            display: inline-block;
            padding: 0.74em 1.5em;
            margin: 1.5em 0 0;
            color: #fff;
            border-width: 0 0 0 0;
            border-bottom: 5px solid;
            text-transform: uppercase;
            background-color: #555;
        }

        .btn:hover {
            background-color: #646464;
        }

        form {
            max-width: 100%;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        li {
            margin: 0 0 0.25em 0;
            clear: both;
            display: inline-block;
            width: 100%;
        }

        li:last-child {
            margin: 0;
        }

        p {
            margin: 0;
            padding: 0;
            float: left;
        }

       

        .divider {
            margin: 0.5em 0 0.5em 0;
            border: 0;
            height: 1px;
            width: 100%;
            display: block;
            background-color: #ee9cb4;
            background-image: linear-gradient(to right, #ee9cb4, #4f6fad);
        }

        .req {
            color: #ee9cb4;
        }

        label {
            display: block;
            margin: 0 0 0.5em 0;
            color: #4f6fad;
            font-size: 1em;
        }

        input {
            margin: 0 0 0.5em 0;
            border: 1px solid #ccc;
            padding: 6px 10px;
            color: #555;
            font-size: 1em;
        }

        textarea {
            border: 1px solid #ccc;
            padding: 6px 10px;
            width: 100%;
            color: #555;
        }

        small {
            color: #4f6fad;
            margin: 0 0 0 0.5em;
        }

        @media only screen and (max-width: 480px) {
            .pull-right {
                float: none;
            }

            input {
                width: 100%;
            }

            label {
                width: 100%;
                display: inline-block;
                float: left;
                clear: both;
            }

            li,
            p {
                width: 100%;
            }

            input.btn {
                margin: 1.5em 0 0.5em;
            }

            h1 {
                font-size: 2.25em;
            }

            h3 {
                font-size: 1.125em;
            }

            li small {
                display: none;
            }
        }
         body {
      background-image: url(./image/bg_quinc.webp);
      background-size: cover; 
      background-repeat: no-repeat; 
      background-attachment: fixed; 
      background-position: center center; 
      color: white; 
    }
    .navbar-brand{
    color:rgb(155, 167, 219);
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
            <a class="nav-link active" aria-current="page" href="../Acceuil.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../produits.php">Produit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/connect.php">admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
        <div class="row header">
            <h1>CONTACT US &nbsp;</h1>
            <h3>Fill out the form below to learn more!</h3>
        </div>
        <div class="row body">
            <form action="contactAction.php" method="post">
                <ul>
                    <li>
                        <p class="left">
                            <label for="first_name">First Name</label>
                            <input type="text" name="nom" placeholder="John" />
                        </p>
                    </li>
                    <li>
                        <p>
                            <label for="email">Email <span class="req">*</span></label>
                            <input type="email" name="email" placeholder="john.smith@gmail.com" />
                        </p>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li>
                        <label for="comments">Comments</label>
                        <textarea cols="46" rows="3" name="msg"></textarea>
                    </li>
                    <li>
                        <input class="btn btn-submit" type="submit" value="Submit" />
                        <small>or press <strong>enter</strong></small>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>

