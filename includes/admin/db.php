<?php 

$dsn= 'mysql:host=localhost;dbname=portfolio'; //data source name
$user= 'root'; // the user to connect
$pass= 'root'; //  password of this user

try{
    $db = new PDO($dsn, $user, $pass); //start a new connect
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>