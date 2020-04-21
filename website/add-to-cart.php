<?php
//Se supone que hice un cambio aqui


session_start();
// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
header('Location: login/index.html');
exit;
}

// Checamos si de verdad mandaron la informacion de la cuenta, isset() verifica que si mandaron algo
if ( !isset($_POST['id'])) {
    // No mandaron los datos requeridos
	exit('Por favor llene los campos requeridos!');
}

$producto_id = $_POST['id'];
$producto_id = $producto_id . ',';
$perfil_id = $_SESSION['id'];

// Agarra los datos de conexion
require 'connection-data.php';


$mysqli = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// Perform query
if ($result = $mysqli -> query("UPDATE accounts SET carrito=concat(carrito, '". $producto_id ."') WHERE id='". $perfil_id ."'")) {
    echo $producto_id;
  }

$mysqli -> close();

?>