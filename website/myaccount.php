<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}

// Agarra los datos de conexion
require 'connection-data.php';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Vamos a obtener el telefono y la contrasena de la base de datos
$stmt = $con->prepare('SELECT password, cellnumber, username FROM accounts WHERE id = ?');

// Usamos la id de la cuenta para buscar la info
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $cellnumber, $username); // Guardamos la info en estas variables
$stmt->fetch();
$stmt->close();
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		
		<link rel="stylesheet" href="css/myaccount.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	</head>
	<body>
        <?php include 'header.php'; ?>
        
		<h2 id="title">Profile Page</h2>
		<div class="content">
			
			<div>
				<p class="info" id="details">Your account details are below:</p>
				<table class="table">
					
				
					<tr>    
					<td class="info">Nombre de la cuenta: </td>
					<td><?=$username?></td>

					</tr>
					<tr>
						<td class="info">Tel&eacute;fono:</td>
						<td><?=$cellnumber?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>

