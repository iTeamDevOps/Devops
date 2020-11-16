<?php
include('../connexion.php');

if (isset($_POST['submit'])){

    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email= $_POST['email'];
    $telephon= $_POST['telephon'];
    $sexe= $_POST['sexe'];
    $ville= $_POST['ville'];
    $pays= $_POST['pays'];
    $langue= $_POST['langue'];
    $pass= $_POST['pass'];
    $matricul= $_POST['matricul'];
    $date= $_POST['date'];
    $hopital= $_POST['hopital'];

    $query = $dbh->query("INSERT INTO user( nom, prenom, email, telephon,sexe,ville,langue, pass, matricule, date, hopitale,role) 
    VALUES ('$nom','$prenom','$email','$telephon','$sexe','$ville','$langue','$pass','$matricul','$date','$hopital','medecin') ");

if($query)
{
    echo '<script> alert("Data Saved"); </script>';
    header('Location: ../authentification.php');
}
else
{
    echo '<script> alert("Data Not Saved"); </script>';
    header('Location: inscriptionMed.php');
}
}

?>