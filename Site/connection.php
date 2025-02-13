<?php
    $host = "localhost"; 
    $user = "root";
    $password = "";
    $dbname = "AulaPHP";

    $conn = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$password);

    if($conn){
        echo "<h1>Conectado.</h1>";
    }else{
        echo "<h1>Não conectado.</h1>";
    }
?>
