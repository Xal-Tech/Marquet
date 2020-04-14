<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
	header('Location: login/index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/home.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <div class="header">
		<p class="titulo">
			<img src="images/Barritas.png" height="30px" align="top" id="barritas">
			Marquet
			<img src="images/logo-marquet.png" height="70px" align="top">
		</p>
		<p class="cuenta">
			<img src="images/cuenta.png" height="70px" align="top">
		</p>
    </div>
		<div  class="buttons">
		<input type="button" id="barra" value="Buscar producto">
		
		<input type="button" id="productos" value="Categorias de productos" >
		</div>
	
</body>
</html>


