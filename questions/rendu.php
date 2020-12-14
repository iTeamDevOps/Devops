<?php
include "../connexion.php" ;
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="../publique/styles.css">

        <title>Test Covid-19 | Admin</title>

    </head>

    <body>



        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="../index.php">

                <img src="../images/covid19.gif"  width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> 

                Test Covid-19

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">

                        <a class="nav-link" href="questionnaire.php">Questions <span class="sr-only">(current)</span></a>

                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0">

                <button class="btn btn-outline-danger btn-sm" type="submit">Log out</button>

                </form>

            </div>

        </nav>

            <br> 



            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-md-12">

                        <div class="card">

                            <div class="card-header">FORMULAIRE DE TEST COVID-19</div>



                            <div class="card-body">

                            <?php
               

                             $stat=$dbh->query("SELECT * FROM question");
                             
                             ?>
                                <table class="table table-striped">

                                    <thead>

                                        <tr>

                                            <th scope="col" scope="col"width="5%">Numero</th>

                                            <th scope="col"scope="col"width="60%">Question</th>

                                            <th scope="col"scope="col"width="15%">Réponse</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                    <?php
                if($stat)
                {
                    foreach($stat as $row)
                    {
            ?>
                                        <tr>
                                            <td> <?php echo $row['id']; ?> </td>                            
                                            <td> <?php echo $row['question']; ?> </td>

                                            <td>

                                                <div >

                                                <input type="text" name="repond" class="form-control" placeholder="Saisir la repons" required>

                                                </div>


                                            </td>

                                        </tr>

                                    </tbody>
                                    <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>  



    </body>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>

