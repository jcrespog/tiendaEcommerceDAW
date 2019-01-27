<!-- agregamos la cabecera de la página principal -->
<?php include '../extend/header.php'; 

$hoy = date('Y-m-d');
$sel_hoy = $con->prepare("SELECT SUM(total) AS ganado_hoy FROM compras WHERE estatus_compra = 'COMPRADO' AND fecha LIKE ? ");
$sel_hoy->execute(array("%$hoy%"));
if ($f_hoy = $sel_hoy->fetch()) { 
$ganado_hoy = $f_hoy['ganado_hoy'];
}
$sel_hoy = null;

$sel_rating = $con->prepare("SELECT id FROM rating WHERE fecha = ? ");
$sel_rating->execute(array($hoy));
$row_rating = $sel_rating->rowCount();
$sel_rating = null;

$sel_inv = $con->prepare("SELECT id FROM inventario WHERE cantidad < 20 ");
$sel_inv->execute();
$row_inv = $sel_inv->rowCount();
$sel_inv = null;

$sel_usuarios = $con->prepare("SELECT id FROM usuarios ");
$sel_usuarios->execute();
$row_usuarios = $sel_usuarios->rowCount();
$sel_usuarios = null;

$con = null;

?>
<br>
<div class="container">
<div class="row">
	<div class="col">
		<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
			<div class="card-header">Reseñas de hoy</div>
			<div class="card-body">
			<a href="../reportes/resenas.php"><h1 class="card-title text-center text-white"><?php echo $row_rating; ?></h1></a>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
			<div class="card-header">Total artículos en stock</div>
			<div class="card-body">
			<a href="stock.php"><h1 class="card-title text-center text-white"><?php echo $row_inv; ?></h1></a>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
			<div class="card-header">Usuarios</div>
			<div class="card-body">
			<h1 class="card-title text-center text-white"><?php echo $row_usuarios; ?></h1>
			</div>
		</div>
	</div>
</div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>