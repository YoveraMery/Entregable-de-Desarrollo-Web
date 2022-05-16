<?php include_once ("conexion/db_connLogin.php" ) ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="img/icon.jpg" />
  <title>Login</title>
  <link  rel="stylesheet" href="styles/estilos.css">
  
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<h1>Sign in</h1>
			<input type="email" placeholder="Email" name= "email" required/>
			<input type="password" placeholder="Password" name= "password" required/>
			<a href="#">Forgot your password?</a>
			<button name="login" type= "submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!
					New here
				</h1>
				<p>Enter your personal details and start journey with us</p>
				<a href="register.php " class="ghost" id="signUp" type="submit">Sign Up</a>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>