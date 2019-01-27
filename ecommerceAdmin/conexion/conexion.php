<!-- conexión a la base de datos ecommerce -->

<?php @session_start();
$con = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');
$con->exec('set names utf8');
 ?>

<!-- end conexión a la base de datos ecommerce -->
