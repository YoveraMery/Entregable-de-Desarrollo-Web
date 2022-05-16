<?php
// start a session
session_start();
 
// supongamos que ya hemos inicializado un par de variables de sesión en el otro script
 
// Destruyes está sesión
session_destroy();
//Se dirije al login
header('Location: login.php');
?>