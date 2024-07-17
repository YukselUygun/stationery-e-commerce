<?php
    $host = 'localhost'; //127.0.0.1
    $dbname = 'kirtasiye';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";

    try{
        $db = new PDO($dsn, $username, $password);
    }catch(PDOException $e){
        echo '<b>Error: </b>' . $e->getMessage();
    }
?>