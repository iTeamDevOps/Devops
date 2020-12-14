<?php
include "../connexion.php" ;
//fetch.php
if(isset($_POST["id"]))
{
 
 $output = '';


 $stat = $dbh->query ("SELECT u.nom,u.prenom,r.text FROM user u,repons r WHERE u.id = '".$_POST["id"]."' u.id = r.id_user");
 
 foreach($stat as $row )
 {
  $output .= '
  <h2>'.$row["nom"].' '.$row["prenom"].'</h2>

  <p>'.$row["text"].'</p>
  ';

  
 
 }
 echo $output;
}

?>