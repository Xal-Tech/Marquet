<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
    header('Location: login/index.html');
    exit;
}

if(!isset($_POST["imagen"])) {
    $uploadOk = 0;
}

$target_dir = "images/user-uploads/perfil/";
$og_filename = basename($_FILES["imagen"]["name"]);
$new_filename = strval(rand(10000, 99999)) . $og_filename;
$target_file = $target_dir . $new_filename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
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

// Perform query
if ($result = $mysqli -> query("UPDATE `accounts` SET `foto-perfil` = '". $new_filename ."' WHERE `id` = '". $perfil_id ."'")) {

  }

$mysqli -> close();

header('Location: myaccount.php');

?>