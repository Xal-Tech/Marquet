<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
	header('Location: login/index.html');
	exit;
}

// Agarra los datos de conexion
require '../connection-data.php';

// Se conecta con la informacion de arriba
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // Por si pasa un error al conectarse
	exit('Hubo un error al conectarse a MySQL: ' . mysqli_connect_error());
}

// Checamos si de verdad mandaron la informacion de la cuenta, isset() verifica que si mandaron algo
if ( !isset($_POST['nombre-producto'], $_POST['imagen'], $_POST['precio']) ) {
    // No mandaron los datos requeridos
	exit('Por favor llene los campos requeridos!');
}

if(strlen($_POST['nombre-producto']) > 30 && strlen($_POST['nombre-producto']) < 1) {
    exit('Nombre inv&aacute;lido. Por favor ingrese un nombre que contenga de 1 a 30 caracteres.');
}

if(strlen($_POST['password']) > 30 && strlen($_POST['password']) < 1) {
    exit('Contrase&ntilde;a inv&aacute;lida. Por favor ingrese una contrase&ntilde;a que contenga de 1 a 30 caracteres.');
}


?>