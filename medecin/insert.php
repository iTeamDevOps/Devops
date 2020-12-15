<?php
    include('../connexion.php');

    if (isset($_POST['submit']) and ($_POST['pass1'] == $_POST['pass2'])){

        $nom = $_POST['nom'];
        $prenom= $_POST['prenom'];
        $email= $_POST['email'];
        $telephon= $_POST['telephon'];
        $sexe= $_POST['sexe'];
        $ville= $_POST['ville'];
        // $pays= $_POST['pays'];
        $langue= $_POST['langue'];
        $pass= md5($_POST['pass1']);
        $matricul= $_POST['matricul'];
        $date= $_POST['date'];
        $hopital= $_POST['hopital'];

        $query = $dbh->query("INSERT INTO user( nom, prenom, email, telephon,sexe,ville,langue, pass, matricule, date,date_f, hopitale,role) 
        VALUES ('$nom','$prenom','$email','$telephon','$sexe','$ville','$langue','$pass','$matricul',sysdate(),'$date','$hopital','medecin') ");
   
            echo '<script> alert("Data Saved"); </script>';
            header('Location: ../authentification.php');
        }
    else
        {
            echo '<script> alert("Data Not Saved"); </script>';
            header('Location: inscriptionMed.php');
        }
    
?>