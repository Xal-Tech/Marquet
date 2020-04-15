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
<?php include 'header.php'; ?>


</body>
</html>