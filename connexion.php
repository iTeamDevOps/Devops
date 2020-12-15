
<?php
    try{
        $dbh = new PDO('mysql:host=localhost;dbname=covid', "root", "");
    }catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>