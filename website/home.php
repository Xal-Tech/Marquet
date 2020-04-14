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
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
	<?php include 'header.php'; ?>
	<div  class="buttons">
		<input type="button" id="barra" value="Buscar producto">

		<input type="button" id="productos" value="Categorias de productos" >
	</div>
	
</body>
</html>
