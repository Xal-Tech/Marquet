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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="searchbar">
		<input id="search-input" onkeyup="buscar_producto()" type="text" name="search" placeholder="Busca un producto"> 
		<button type="submit" style="border-radius: 15px"><i class="fa fa-search"></i></button>
	</div>

	<table>
		<tr>
			<th colspan="2" class="corner">
				Producto
			</th>
			<th colspan="2">
				Vendedor
			</th>
			<th>
				Rating
			</th>
			<th>
				Costo
			</th>
		</tr>
		<tr id="list-0">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/carne-1.jpg");'>
			</td>
			<td class="nombre-producto">
				Arrachera
			</td>
			<td>
				Juan L&oacute;pez
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo1.jpg");'>
			</td>
			<td>
				4/5
			</td>
			<td>
				$143 por kilo
			</td>
		</tr>
		<tr id="list-1">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/tomate-1.jpg");'>
			</td>
			<td class="nombre-producto">
				Tomate
			</td>
			<td>
				Dorotea Riesco
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo2.jpg");'>
			</td>
			<td>
				3/5
			</td>
			<td>
				$11 por kilo
			</td>
		</tr>
		<tr id="list-2">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/aceite-nutrioli-1.jpeg");'>
			</td>
			<td class="nombre-producto">
				Aceite Nutrioli
			</td>
			<td>
				Carlos  Subias
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo3.jpg");'>
			</td>
			<td>
				5/5
			</td>
			<td>
				$151 por kilo
			</td>
		</tr>
		<tr id="list-3">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/concha-blanca-1.jpg");'>
			</td>
			<td class="nombre-producto">
				Concha
			</td>
			<td>
				Maria Blanca Nieves
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo4.jpg");'>
			</td>
			<td>
				4/5
			</td>
			<td>
				$13
			</td>
		</tr>
		<tr id="list-4">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/carne-3.jpg");'>
			</td>
			<td class="nombre-producto">
				Arrachera
			</td>
			<td>
				Fernando Pedre&ntilde;o
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo5.jpg");'>
			</td>
			<td>
				1/5
			</td>
			<td>
				$148 por kilo
			</td>
		</tr>
		<tr id="list-5">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/tomate-3.jpg");'>
			</td>
			<td class="nombre-producto">
				Tomate
			</td>
			<td>
				Cristina Barranco
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo6.jpg");'>
			</td>
			<td>
				2/5
			</td>
			<td class="corner">
				$14 por kilo
			</td>
		</tr>
		<tr id="list-6">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/aceite-nutrioli-2.jpeg");'>
			</td>
			<td class="nombre-producto">
				Aceite de soya
			</td>
			<td>
				Juan Santolaya
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo7.jpg");'>
			</td>
			<td>
				4/5
			</td>
			<td>
				$144 por kilo
			</td>
		</tr>
		<tr id="list-7">
			<td class="table-image" style='background-image: url("images/user-uploads/productos/concha-blanca-2.jpeg");'>
			</td>
			<td class="nombre-producto">
				Concha blanca
			</td>
			<td>
				Suri Alberdi
			</td>
			<td class="table-image" style='background-image: url("images/user-uploads/perfil/demo8.jpg");'>
			</td>
			<td>
				4/5
			</td>
			<td>
				$14 por kilo
			</td>
		</tr>
	</table>
	<script src="js/home.js"></script>
</body>
</html>