<?php
include "../connexion.php" ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="rendu.php">Rendu <span class="sr-only">(current)</span></a>
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
                            <div class="card-header">AJOUT DE QUESTIONS AU FORMULAIRE</div>

                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#aj">
                                    Ajouter  
                                </button>

                                    <?php

                                    $stat = $dbh->query ("SELECT * FROM question");
                                    

                                    ?>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"width="5%">Identifiant</th>
                                            <th scope="col"width="60%">Question</th>
                                            <th scope="col" width="5%">Modifier</th>  
                                            <th scope="col" width="5%">Supprimer</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           if($stat){
                                                foreach($stat as $row)
                                            {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td> <?php echo $row['id']; ?> </td>                            
                                                <td> <?php echo $row['question']; ?> </td>     
                                                <td> 
                                                    <button type="button" class="btn btn-success btn-sm editbtn"> EDIT </button>
                                                </td> 
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm deletebtn"> DELETE </button>
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
             

<!-- Modal -->
<div class="modal fade" id="aj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter question  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="insert.php" method="POST" enctype="multipart/from-data">

            <div class="modal-body">

                
                <div class="form-group">
                    <label> Question </label>
                    <input type="text" name="question" class="form-control" placeholder="Saisir la question" required>
                </div>

               
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Save </button>
            </div>
        </form>

    </div>
  </div>
</div>




<!-- ####################################################################################################################### -->


            <!-- EDIT POP UP FORM (Bootstrap MODAL) -->

            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Modifier Question </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <form action="update.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="update_id" id="update_id">

                            <div class="form-group">
                                <label> Question </label>
                                <input type="text" name="question" id="question" class="form-control" >
                            </div>

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updatedata" class="btn btn-primary">Update </button>
                        </div>
                    </form>

                </div>
            </div>
            </div>

            <!-- #################################################################################################### -->    
            <!-- DELETE POP UP FORM (Bootstrap MODAL) -->

            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Supprimer Question </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <form action="supp.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="delete_id" id="delete_id">

                            <h4> Volyer-vous Supprimer ??</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">  NON </button>
                            <button type="submit" name="deletedata" class="btn btn-primary"> OUI  </button>
                        </div>
                    </form>

                </div>
            </div>
            </div>

            <!-- #################################################################################################### -->

            <script>

$(document).ready(function () {

    $('.deletebtn').on('click', function() {
        
        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);
      
    });
});

</script>



<script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#question').val(data[1]);
            
    });
});

</script>
    </body>

    
</html>
