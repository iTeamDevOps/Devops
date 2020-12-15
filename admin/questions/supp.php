<?php
include "../connexion.php" ;

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = $dbh->query("DELETE FROM question WHERE id ='$id'");
    

    if($query)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:questionnaire.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>