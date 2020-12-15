<?php
    include('../connexion.php');  

    if (isset($_POST['submit']) and ($_POST['pass1'] == $_POST['pass2'])){

        $email= $_POST['email'];
        $querys = $dbh->query('select count(*) from user where email = "'.$email.'"')->fetch();
      
        if ($querys == "0"){
            $nom = $_POST['nom'];
            $prenom= $_POST['prenom'];
            //$email= $_POST['email'];
            $telephon= $_POST['telephon'];
            $sexe= $_POST['sexe'];
            $ville= $_POST['ville'];
            //$pays= $_POST['pays'];
            $langue= $_POST['langue'];
            $pass= md5($_POST['pass']);
            $matricul= $_POST['matricul'];
            $hopital= $_POST['hopital'];

            $query = $dbh->query("INSERT INTO user( nom, prenom, email, telephon,sexe,ville,langue, pass, date,role) 
            VALUES ('$nom','$prenom','$email','$telephon','$sexe','$ville','$langue','$pass',sysdate(),'patient') ");

            
                echo '<script> alert("Data Saved"); </script>';
                header('Location: ../authentification.php');
        }else{
           
            echo '<script> alert("Ce mail existe deja"); </script>';
           
            //header('Location: inscriptionUser.php');
            
        }

    }else{
        echo '<script> alert("La saisie des données est erronée"); </script>';
        //header('Location: inscriptionUser.php');
    }
?>