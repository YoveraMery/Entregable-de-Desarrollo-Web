<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="img/icon.jpg" />
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href = "styles/estilosMain.css">
    
    <!----===== Boxicons CSS ===== -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>La Cartoons</title>
</head>
<body class= 'hidden'>
	<!-- loader -->
	<div class= 'centrado'id="loader">
		<div class="lds-spinner">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<?php require ('header.php')?>
	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">La Cartoon</h3>
				<p class="descripcion">
				Este espacio es traído a ustedes para que podamos revivir aquellos momentos que pasábamos frente al televisor cuando no sentíamos preocupación de nada. Sabemos cuánto quieres volver a ver todas las series y caricaturas que marcaron tú infancia y adolescencia, aquí las tendrás todas tal cual como las recuerdas. La temática es simple, todas las series son organizadas por su canal original o simplemente donde fue alguna vez transmitida. Las actualizaciones de las series se estarán realizando semanalmente dependiendo la dificultad de las mismas donde no solo se subirán series clásicas, sino que también serán subidas series nuevas. Vuelve a vivir la emoción de tus programas favoritos y comparte con todos tus amigos para que ellos también lo disfruten tanto como tú.
				</p>
				<button role="button" class="boton" onclick="location.href='https://www.lacartoons.com/serie/capitulo/24245?t=1'"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton" onclick="location.href= '#footer'"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>
		<?php require ('footer.php')?>
	</main>
</body>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src= "https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/codigo.js"></script>
</html>
