<?php
session_start();

// Si no esta logged in mandarlo a la pagina de login
if (isset($_SESSION['loggedin'])) {
	header('Location: home.php');
	exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Marquet</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <div class="header">
        <p class="titulo">
            Marquet
            <img src="images/logo-marquet.png" height="70px" align="top">

        </p>

        <p class="tienes-cuenta">
            Ya tienes cuenta? <a href="login/index.html" id="iniciar-sesion-boton">Iniciar sesi&oacute;n</a>
        </p>

    </div>

    <div class="resumen">
        <p>
            Compra productos de tus mercados locales f&aacute;cilmente en Marquet.
        </p>

        <table class="ventajas">
            <tr>
                <td>
                    <img src="images/caja-envio.png" width="100px">
                </td>

                <td>
                    <p>
                        Compra y recibe tu despensa desde la comodidad de tu casa.
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <img src="images/vendedor-local.jpg" width="100px">
                </td>

                <td>
                    <p>
                        Apoya a los vendedores de tu localidad.
                    </p>
                </td>
            </tr>

            <tr>
                <td>
                    <img src="images/manzanas.jpg" width="100px">
                </td>

                <td>
                    <p>
                        Productos de la mejor calidad y un servicio incomparable.
                    </p>
                </td>
            </tr>

        </table>
    </div>

    <div class="cuenta">
        <p id="crea-cuenta-titulo">
            Crea una cuenta
        </p>
        <p id="crea-cuenta-subtitulo">
            Es r&aacute;pido y sencillo
        </p>

        <form action="login/create-account.php" method="POST">
            <input type="text" class="input-registro-texto" name="username" placeholder="Nombre Completo">
            <br>
            <input type="text" class="input-registro-texto" name="cellnumber" placeholder="Telefono celular">
            <br>
            <input type="password" class="input-registro-texto" name="password" placeholder="Contrase&ntilde;a">
            <br>
            <label>Aceptar <a href="#">t&eacute;rminos y condiciones</a></label>
            <input type="checkbox" id="terminos-y-condiciones-checkbox">
            <br>
            <input type="submit" id="crear-cuenta-boton" value="Crear cuenta">
        </form>
    </div>
</body>

</html>
