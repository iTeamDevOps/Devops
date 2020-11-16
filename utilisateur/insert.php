<?php
include('../connexion.php');

if (isset($_POST['submit'])){

    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email= $_POST['email'];
    $telephon= $_POST['telephon'];
    $sexe= $_POST['sexe'];
    $ville= $_POST['ville'];
    $langue= $_POST['langue'];
    $pass= $_POST['pass'];
   

    $query = $dbh->query("INSERT INTO user( nom, prenom, email, telephon,sexe,ville,langue, pass,role) 
    VALUES ('$nom','$prenom','$email','$telephon','$sexe','$ville','$langue','$pass','patient') ");

if($query)
{
    echo '<script> alert("Data Saved"); </script>';
    header('Location: ../authentification.php');
}
else
{
    echo '<script> alert("Data Not Saved"); </script>';
    header('Location: inscriptionUser.php');
}
}

?>