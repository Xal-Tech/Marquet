<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
    header('Location: login/index.html');
    exit;
}

// Agarra los datos de conexion
require 'connection-data.php';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Vamos a obtener el telefono y la contrasena de la base de datos
$stmt = $con->prepare("SELECT `password`, `cellnumber`, `username`, `foto-perfil` FROM `accounts` WHERE `id` = ?");

// Usamos la id de la cuenta para buscar la info
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $cellnumber, $username, $foto_perfil); // Guardamos la info en estas variables
$stmt->fetch();
$stmt->close();
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Perfil</title>
		
		<link rel="stylesheet" href="css/myaccount.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	</head>
	<body>
        <?php include 'header.php'; ?>
        
		<h2 id="title">Perfil</h2>
		<div class="content">
			
			<div>
				<p class="info" id="details">Detalles de la cuenta:</p>
				<img src="images/user-uploads/perfil/<?=$foto_perfil?>" width="100px" height="100px">
				<br><br>
				<table class="table">
					
				
					<tr>    
					<td class="info">Nombre de la cuenta: </td>
					<td class="data"><?=$username?></td>

					</tr>
					<tr>
						<td class="info">Tel&eacute;fono:</td>
						<td class="data"><?=$cellnumber?></td>
					</tr>
				</table>
				<br><br><br>
				<form enctype="multipart/form-data" action="profile-picture-upload.php" method="POST">
					<label for="input-imagen">Escoge una foto de perfil nueva</label>
					<br>
					<input type="file" id="input-imagen" name="imagen">
					<br>
					<input type="submit">
				</form>
			</div>
		</div>
	</body>
</html>

