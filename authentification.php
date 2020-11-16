<?php
session_start();
include "connexion.php";
if (isset($_POST['log'])) { 
        $u=$_POST['user'];
        $p=$_POST['pwd'];
      
    if (empty($u)|| empty($p)) {
  echo "<script>alert('No inputs!! Login field ')</script>";
    }
    else{
        $query = $dbh->query("SELECT * from user where email = '$u' and pass= '$p' Limit 1");
  
    if ($query) {
     
    foreach($query as $row){
      if ($row['role'] == "patient") {
        $_SESSION['user'] = $u;
       
        echo "<script>alert('bonjour patient ')</script>";
      
    }else if ($row['role'] == "medecin") {
       $_SESSION['user'] = $u;
       echo "<script>alert('bonjour medecin ')</script>";
   
    }else{
      echo "<script>alert('User Not found ')</script>";

        }
     }
    }else{
      echo "<script>alert('Wrong Data')</script>";
        
        }
    }
}
   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        

        <link rel="stylesheet" href="publique/styles.css">
        <title>Test-Covid.19 | Admin</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="images/covid19.gif" width="30" height="30" width="50" height="40" class="d-inline-block align-top" alt="" loading="lazy"> 
                    Test Covid-19
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Rendu <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success btn-sm" type="submit" disabled > Authentification </button>
                </form>
            </div>
        </nav> 
  </head>

  <br> 
  <body class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card text-center">

                        <div class="card-header">
                            S'authentifier
                        </div>
                        <div class="card-body">
                            <form class="form-signin" action="authentification.php" method="post" >
                                <img class="mb-4" src="images/covid19.gif" alt="" width="72" height="72">
                                <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
                                <label for="inputEmail" class="sr-only" >Enter votre adresse mail</label>
                                <input type="email" id="inputEmail" name="user" class="form-control" placeholder="Adresse mail" required autofocus>
                                <label for="inputPassword" class="sr-only">Mot de passe</label> <br>
                                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Mot de passe" required>
                                <div class="checkbox mb-3">
                                    <label>
                                    <input type="checkbox" value="remember-me"> Mémoriser le mot de passe
                                    </label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="log">Connexion</button>
                                </div>
                            </form>
                            <div class="card-footer text-muted">
                                <p>&copy; 2020-2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </div>   
    </body>  
</html>
