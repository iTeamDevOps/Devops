<?php

include("../connexion.php");

if(isset($_POST['insertdata']))
{
    $question = $_POST['question'];
    


    
    $query = $dbh->query( "INSERT INTO question ( `question` ) VALUES ('$question')");


    


    if($query)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: questionnaire.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
        
    }
}

?>