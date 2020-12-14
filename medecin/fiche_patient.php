<?php
include "../connexion.php" ;
session_start();
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
            <a class="navbar-brand" href="#">
                <img src="/project/images/covid19.gif" width="30" height="30" width="50" height="40" class="d-inline-block align-top" alt="" loading="lazy"> 
                    Test Covid-19
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
            
                    <li class="nav-item active">
                        <a class="nav-link"  href="https://accounts.google.com/">GMail<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="fiche_patient.php">Listes Patients <span class="sr-only">(current)</span></a>
                    </li>
                 
                </ul>
            
               

                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-danger btn-sm" type="submit">Log out</button>
                </form>
            </div>
        </nav>
          
          <br>

  <br>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Liste Patients</div>

                            <div class="card-body">
                                

                                    <?php

                                    $stat = $dbh->query ("SELECT * FROM user where role= 'patient' ");
                                    

                                    ?>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"width="20"> Identifiant</th>
                                            <th scope="col"> Nom & Prenom</th>
                                 
                                            <th scope="col" >Email</th>
                                            <th scope="col" >Info</th>
 
                                            <th scope="col" >More Info</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                           if($stat){
                                                foreach($stat as $row)
                                            {
                                                $x = $row['id'];
                                        echo '
                                        <tbody>
                                            <tr>
                                               
                                                <td> '. $row['id'].' </td>                            
                                                <td> '.$row['nom'].' '. $row['prenom'].' </td>
                                                  
                                                <td> '.$row['email'].'  </td> ';

                                                $s = $dbh->query ("SELECT * FROM reponse where id_user=$x");
                                                if($s){
                                                foreach($s as $r)
                                            {
                                                echo '<td>
                                                
                                                '. $r['text'].'

                                                </td>';

                                            }
                                        }else{
                                                echo' <td> --------  </td>';
                                            }
                                               echo' <td> 
                                                    <button type="button" class="btn btn-success view " data-toggle="modal" data-target="#aj"> Voir fiche  </button>
                                                </td> 
                                               
                                            </tr>
                                        </tbody>
                                       
                                           ';   
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
 <div class="modal fade" id="aj" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fiche Patient  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        
            <div class="modal-body">

                
                <div class="form-group">
                    <output type="text" name="nn" id="nn"> 
                    
                

                    
                    
                   
                </div>

               
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Quit</button>

            </div>
       

    </div>
  </div>
</div>
<!-- fin Modal -->


                    
<script>
$(document).ready(function () {
    $('.view').on('click', function() {
        
        $('#aj').modal('show');

        
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

           
            $('#nn').val(data[3]);
            
            
    });
});

</script>
   </body>  
</html>
