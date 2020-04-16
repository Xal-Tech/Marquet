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
		<button type="submit"><i class="fa fa-search"></i></button>
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
			<th>
				Comprar
			</th>
		</tr>

<?php
// Agarra los datos de conexion
require 'connection-data.php';

// Se conecta con la informacion de arriba
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// Por si pasa un error al conectarse
	exit('Hubo un error al conectarse a MySQL: ' . mysqli_connect_error());
}

// Preparamos el SQL
if ($stmt = $con->prepare('SELECT * FROM productos')) {
    $stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) { // Checamos si existe el cellnumber
        $stmt->bind_result($id, $foto_producto, $nombre_producto, $nombre_vendedor, $foto_perfil, $rating, $precio);
		$stmt->fetch();
		
		// echo '''

		// ''';

    }

}



?>
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
			<td>
				<a href="">A&ntilde;adir a carrito
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
