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
	<link rel="stylesheet" href="css/mapa.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nuevo-producto.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <?php include 'header.php'; ?>

    <h1>
        Publica un nuevo producto
    </h1>
    <div id="center-info">
    <form action="upload-product.php" method="POST" >
        <label for="input-nombre-producto" class="information" id="top">Nombre de tu producto</label>
        <br>
        <input type="text" id="input-nombre-producto" name="nombre-producto" class="input-box" >
        <br>
        <label for="input-precio" class="information">Precio</label>
        <br>
        <input type="text" id="input-precio" name="nombre-producto" class="input-box">
        <br>
        <label for="input-imagen" class="information">Sube una imagen de tu producto</label>
        <br>
        <input type="file" id="input-imagen" name="imagen" class="buttons">
        <br>
        <input type="submit" id="sumit-button">
    </form>
    </div>
	
</body>
</html>
