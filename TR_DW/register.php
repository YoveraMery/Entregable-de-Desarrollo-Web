<?php require "conexion/db_connRegister.php"  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href= "styles/skyRegister.css">
        <link rel="stylesheet" href= "styles/registerStyle.css">
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="img/icon.jpg" />
    </head>

	<body class="bg-cyan">
		<div class = "avatar">
			<img src="img/naruto-removebg-preview.png">
		</div>
		<div class="body body-s">
			<form action="register.php" class="sky-form" method="POST">
				<header>Registration form</header>
				<fieldset>					
					<section>
						<label class="input">
							<i style='font-size:24px' class='fas'>&#xf406;</i>
							<input type="text" placeholder="Username" name= 'name'required>
							<b class="tooltip tooltip-bottom-right">Solo caracteres y números</b>
						</label>
					</section>
                    <section>
						<label class="input">
							<i style='font-size:24px' class='fas'>&#xf2bb;</i>
							<input type="text" placeholder="DNI" name= 'dni' required>
							<b class="tooltip tooltip-bottom-right">Solo caracteres y numeros</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i style='font-size:24px' class='fas'>&#xf2b6;</i>
							<input type="email" placeholder="Email address" name= 'email'required>
							<b class="tooltip tooltip-bottom-right">Necesario para verificar tu cuenta</b>
						</label>
					</section>
					
					<section>
						<label class="input">
							<i style='font-size:24px' class='fas'>&#xf023;</i>
							<input type="password" placeholder="Password" name= 'password'required>
							<b class="tooltip tooltip-bottom-right">Solo caracteres y numeros</b>
						</label>
					</section>
				</fieldset>
				<footer>
					<button type="submit" class="button" name= "register" >Submit</button>
					<p class="text-center mt-3">Already have an account?
                    <a href= 'login.php'>Sign in</a>
				</footer>
			</form>
			
		</div>
	</body>
</html>