<?php
//incluir el archivo de conexión
include_once('db_conn.php');
//verificar si el form ha sido enviado, insertar data de usuario dentro de la base de datos
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $email= $_POST['email'];
    $password = $_POST['password'];

    //si el email existe, muestre error
    $email_result = mysqli_query($conn,"SELECT 'email' FROM user WHERE dni= '$dni'AND email='$email' AND password='$password'");

    //si el el dni existe, muestra error
    $dni_result = mysqli_query($conn,"SELECT 'dni' FROM user WHERE dni= '$dni'AND email='$email' AND password='$password'");
    
    //muestre cuantas filas son consultadas
    $user_match = mysqli_num_rows($email_result);
    $user_match2 = mysqli_fetch_array($dni_result);
    //si el numero de filas retornadas son mas que 0; significa que el email ya existe
    if($user_match >0 && $user_match2 > 0){
        echo "El usuario con este email '$email' y dni '$dni' ya existe";
    }else if($user_match2  > 0 | $user_match >0){
        echo "El usuario con este dni '$dni' existe";
    }
    else if($user_match >0 ){
        echo "El usuario con este email '$email' existe ";
    }
    else{
        //insertar la data dentro de la base de datos
        $result = mysqli_query($conn,"INSERT INTO user(name,dni,email,password) VALUES('$name','$dni','$email','$password')");
        //si la data ha sido insertada exitosamente
        if($result){
 ?>

            <h3 style="text-align: center; color: red;">Cuenta registrada</h3>
            <?php           
        }else{
            echo "Error de registro, intente nuevamente".mysqli_error($conn);
        }
    }
}
?>