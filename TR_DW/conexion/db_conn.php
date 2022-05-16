<?php

$databaseHost = 'localhost';
$databaseName = 'db_users';
$databaseUsername= 'root';
$databasePassword = '';

//Create database
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//Comprueba la database
if(!$conn){
    echo '¡Error de conexión !';
}

?>



