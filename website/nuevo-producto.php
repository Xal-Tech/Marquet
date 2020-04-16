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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <?php include 'header.php'; ?>

    <h1>
        Publica un nuevo producto
    </h1>
    
    <form enctype="multipart/form-data" action="upload-product.php" method="POST">
        <input type="hidden" name="tipo" value="productos">
        <label for="input-nombre-producto">Nombre de tu producto</label>
        <br>
        <input type="text" id="input-nombre-producto" name="nombre-producto">
        <br>
        <label for="input-precio">Precio</label>
        <br>
        <input type="text" id="input-precio" name="precio">
        <br>
        <label for="input-imagen">Sube una imagen de tu producto</label>
        <br>
        <input type="file" id="input-imagen" name="imagen">
        <br>
        <input type="submit">
    </form>
	
</body>
</html>
