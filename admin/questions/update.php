<?php
include "../connexion.php" ;

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $question = $_POST['question'];

       
            $query = "UPDATE question SET question = '$question' WHERE id='$id'  ";
        
       
       
        $query_run = $dbh->query( $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:questionnaire.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>