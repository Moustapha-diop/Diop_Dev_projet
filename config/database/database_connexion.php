<?php
$host = "localhost";
$user = "root";
$password= "";
$database= "l2gl2_db";
$port = 3306;

$dsn="mysql:host=$host;port=$port;dbname=$database";

try{
    $connexion=new PDO($dsn,$user,$password);
}catch (PDOException $e) {
    die("Database connection failed: ".$e->getMessage());
}
?>