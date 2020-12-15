<?php
    include "../connexion.php" ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../publique/styles.css">
        <title>Test-Covid.19 | Admin</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/covid19.gif" width="30" height="30" width="50" height="40" class="d-inline-block align-top" alt="" loading="lazy"> 
                    Test Covid-19
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                   
                </ul>
                <div action="../authentification.php" class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success btn-sm" href="../authentification.php" role="button"> Authentification </a>
                </div>
            </div>
        </nav>
            <br> 


            <body class="text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card text-left">

                                <div class="card-header">
                                    Remplir votre inscription
                                </div>

                    <script>
                        function verif() {
                                if ((document.getElementById("pass1").value) != (document.getElementById("pass2").value)) {
                                    alert("Les mots de passe ne correspondent pas...");
                                    document.getElementById("email").focus();
                                    return false;
                                }
                            }
                    </script>

                                <div class="card-body">
                            <form class="form-signin" method="post" onsubmit="return verif()" action="insert.php">
                                <div class="form-row">
                                    <div class="col-md-6 mb-1">
                                        <label for="validationDefault01">Nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom"  required>
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <label for="validationDefault02">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom"  required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationDefault01">E-mail</label>
                                        <input type="text" class="form-control" name="email" id="email"  required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="validationDefault01">Téléphone</label>
                                        <input type="number" class="form-control" name="telephon" id="telephon" required>
                                    </div>

                                    <div class="custom-control custom-radio mt-5 mx-4 custom-control-inline">
                                        <input type="radio" id="homme" checked name="sexe" value="Male" class="custom-control-input">
                                        <label class="custom-control-label" for="homme" >Homme</label>
                                    </div>

                                    <div class="custom-control custom-radio mt-5 mx-2 custom-control-inline">
                                        <input type="radio" id="femme" name="sexe" value="Female"class="custom-control-input">
                                        <label class="custom-control-label" for="femme">Femme</label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault03">Ville</label>
                                        <input type="text" class="form-control" id="ville" name="ville" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault05">Langue</label>
                                        <input type="text" class="form-control" id="langue" name="langue" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4 mb-1">
                                        <label for="validationDefault01">Matricule</label>
                                        <input type="text" class="form-control" id="matricul" name="matricul"   required>
                                    </div>
                                    <div class="col-md-3 mb-1">
                                        <label for="validationDefault02">Date de fonction</label>
                                        <input type="date" class="form-control" id="date" name="date"  required>
                                    </div>
                                    <div class="col-md-5 mb-1">
                                        <label for="validationDefault02">Hopital</label>
                                        <input type="text" class="form-control" id="hopital" name="hopital" required>
                                    </div>
                                </div>

                                <div class="form-row mt-2">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Mot de passe</label>
                                        <input type="password" class="form-control" id="pass1" name="pass1" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">Confirmer le mot de passe</label>
                                        <input type="password" class="form-control" id="pass2" name="pass2"   required>
                                    </div>
                                </div>

                                <button class="btn btn-primary mt-2" type="submit" name="submit"  value="Add">Confirmer</button>

                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>             
        </div>   

            
    </body>  
</html>

