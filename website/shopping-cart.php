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
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shopping-cart.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title >Tus pedidos</title>
</head>
<body>
<?php include 'header.php'; ?>





<div id="pedidos-box">

    <h1 id="pedidos-titulo">Tus pedidos</h1>

    <?php
    // Agarra los datos de conexion
    require 'connection-data.php';

    // Se conecta con la informacion de arriba
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        // Por si pasa un error al conectarse
        exit('Hubo un error al conectarse a MySQL: ' . mysqli_connect_error());
    }

    $query = "SELECT carrito FROM accounts WHERE id='". $_SESSION['id'] ."'";
    $result = $con->query($query);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $lista_productos_en_carrito = $row['carrito'];
            $lista_productos_en_carrito = substr($lista_productos_en_carrito, 0, -1);
        }
    }

    $query = "SELECT * FROM productos WHERE id IN (". $lista_productos_en_carrito .")";
    $result = $con->query($query);



    if ($result = $con->query($query)){
        if ($result->num_rows > 0) {
            echo '
            <input type="submit" id="hacer-pedido" value="Envia tu pedido" >

            <table>
                <tr>
                    <th colspan="2" class="corner">
                        Producto
                    </th>
                    <th>
                        Vendedor
                    </th>
                    <th>
                        Costo
                    </th>
                </tr>';
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '
                <tr id="list-'. strval($row['id']) .'">
                <td class="table-image" style="background-image: url(\'images/user-uploads/productos/'. $row['foto-producto'] .'\');">
                </td>
                <td class="nombre-producto">
                    '. $row['nombre-producto'] .'
                </td>
                <td>
                    '. $row['nombre-vendedor'] .'
                </td>
                <td>
                    '. $row['precio'] .'
                </td>
                </tr>';
            }
        echo '</table>';
        }
    } else {
        echo '<p id="no-productos">No tienes productos en tu carrito.</p>';
    }

    $con->close();
    ?>

</div>



</body>
</html>