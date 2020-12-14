<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "covid19");
 $output = '';
 $query = "SELECT * FROM user u,reponse r WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <h2>'.$row["u.nom"].' '.$row["U.prenom"].'</h2>
  
  <p>'.$row["r.text"].'</p>
  ';
 
 }
 echo $output;
}

?>
