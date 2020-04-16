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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Marquet</title>
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

$query = 'SELECT * FROM productos';
$result = $con->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '
		<tr id="list-'. strval($row['id']) .'">
		<td class="table-image" style="background-image: url(\'images/user-uploads/productos/'. $row['foto-producto'] .'\');">
		</td>
		<td class="nombre-producto">
			'. $row['nombre-producto'] .'
		</td>
		<td>
			'. $row['nombre-vendedor'] .'
		</td>
		<td class="table-image" style="background-image: url(\'images/user-uploads/perfil/'. $row['foto-perfil'] .'\');">
		</td>
		<td>
			'. $row['rating'] .'
		</td>
		<td>
			'. $row['precio'] .'
		</td>
		<td class="anadir-a-carrito">
			A&ntilde;adir a carrito
		</td>
		</tr>';
    }
} else {
    echo "0 results";
}
$con->close();

?>
	<script src="js/home.js"></script>
</body>
</html>