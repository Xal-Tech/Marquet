<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
	header('Location: login/index.html');
	exit;
}

// Checamos si de verdad mandaron la informacion de la cuenta, isset() verifica que si mandaron algo
if ( !isset($_POST['nombre-producto'], $_POST['precio'], $_POST['tipo']) ) {
    // No mandaron los datos requeridos
	exit('Por favor llene los campos requeridos!');
}


// Subir imagen
$target_dir = "images/user-uploads/" . $_POST['tipo'] . "/";
$og_filename = basename($_FILES["imagen"]["name"]);
$new_filename = strval(rand(10000, 99999)) . $og_filename;
$target_file = $target_dir . $new_filename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

while (true) {
    $filename = uniqid() . '.pdf';
    if (!file_exists(sys_get_temp_dir() . $filename)) break;
   }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["imagen"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Solo se aceptan fotos del tipo JPG, JPEG y PNG.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    exit( "Sorry, your file was not uploaded.");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
    } else {
        exit( "Sorry, there was an error uploading your file.");
    }
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

$query = "SELECT * FROM accounts WHERE id = '". $perfil_id ."'";

$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $nombre_vendedor = $row['username'];
        $foto_vendedor = $row['foto-perfil'];
    }
}

$rating = strval(rand(1,5)) . '/5';
$verified = strval(rand(0,1)); 
$query = "INSERT INTO `productos` (`foto-producto`, `nombre-producto`, `nombre-vendedor`, `foto-perfil`, `rating`, `precio`, `verified`) 
VALUES ('". $new_filename ."', '". $_POST['nombre-producto'] ."', '". $nombre_vendedor ."', '". $foto_vendedor ."', '". $rating ."', '". $_POST['precio'] ."', '". $verified ."')";

// Perform query
if ($result = $mysqli -> query($query)) {
    echo 'Producto subido exitosamente';
  }

$mysqli -> close();

?>
