<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php 
		include 'inc/link.php';
	 ?>
</head>
<body>
	<!-- <?php 
		include 'inc/navbar.php';
	 ?> -->
	<div class="jumbotron" >
		<div class="row align-items-center">
			<span class="col-6 float-left"><center><h1 style="font-family: Pacifico; color: white;">MARQUET</h1></center></span>
			<span class="col-6"><center><img src="../images/logo-marquet.png" alt="Logo"></center></span>
		</div>
	</div>
	<div class="container" style="margin-bottom: 80px;">
	 	<div class="card" style="margin-bottom: 40px;">
	 		<div class="card-title">
	 			<center>
	 			<strong><h2>Crea una cuenta</h2></strong>
	 			<br>
	 			<h5>Es rápido y sencillo</h5>
	 			</center>
	 		</div>
	 	</div>
	 	<div class="container-fluid">
	 		<form  action="login/create-account.php" method="POST">
	 			<div class="form-group">
	 				<input type="text" class="form-control" name="username" placeholder="Nombre Completo">
	 			</div>
	 			<div class="form-group">
	 				<input type="text" class="form-control" name="cellnumber" placeholder="Telefono celular">
	 			</div>
	            <div class="form-group">
	            	<input type="password" class="form-control" name="password" placeholder="Contraseña">
	            </div>
	            <div class="form-group">
	            	<input class="form-check-input" type="checkbox" id="terminos-y-condiciones-checkbox" required>
	            	<label class="form-check-label">Aceptar <a href="#">términos y condiciones</a></label>
	            </div>
	            <button class="btn btn-info" type="submit" value="Crear cuenta">Crear cuenta</button>
        	</form>
	 	</div>
	 </div>
</body>
</html>