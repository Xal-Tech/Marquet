<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}

?>

<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/shopping-cart.css">
<?php include 'header.php'; ?>

<title >Tus pedidos</title>

<h1 id="pedidos-titulo">Tus pedidos</h1>

<div id="pedidos-box">



</div>

<input type="submit" id="hacer-pedido" value="Envia tu pedido" >


</body>
</html>