<?php
session_start();
// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
header('Location: login/index.html');
exit;
}

// Agarra los datos de conexion
require 'connection-data.php';

$perfil_id = $_SESSION['id'];

$mysqli = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

// Perform query
if ($result = $mysqli -> query("UPDATE `accounts` SET `carrito` = '' WHERE `id` = '". $perfil_id ."'")) {

  }

$mysqli -> close();

?>
