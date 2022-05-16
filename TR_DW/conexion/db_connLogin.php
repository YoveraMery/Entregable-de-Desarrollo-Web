<?php
//sesion para iniciar nuestra sesion en php
session_start();

//crear la conexion usando nuestro archivo db_conn.php

include_once("db_conn.php");

//si el formulario a subir; tiene email y el password completo

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //verificar si el usuario ya existe con estas credenciales
    $result = mysqli_query($conn, "SELECT 'email', 'password' FROM user WHERE email = '$email' AND password = '$password'");

    //contar el número usuario/ filas retornados en la consulta
    $user_match = mysqli_num_rows($result);

    //si el usuariocon el email existe que nos redireccione a alguna pagina

    if($user_match > 0){
        $_SESSION['email'] = $email;
        header("Location: main.php");
    }else{
        header("Location: error.php");
    }
}

?>