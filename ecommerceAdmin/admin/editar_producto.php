<!-- agregamos la cabecera de la página principal -->
<?php include '../extend/header.php'; 

$clave = htmlentities($_GET['clave']);

$sel = $con->prepare("SELECT * FROM inventario WHERE clave = ?");
$sel->execute(array($clave));
  	if ($f = $sel->fetch()) { 
  	}
  	$sel = null;
?>
<br>
<div class="container">
	<div class="card text-white bg-dark">
			<div class="card-header">
				<h4 class="card-title">Editar artículo</h4></div>
			<div class="card-body">

				<form action="up_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<input type="hidden" name="clave" value="<?php echo $clave ?>">
					<div class="form-group">
						<input type="text" name="producto" required placeholder="Producto" class="form-control" value="<?php echo $f['producto'] ?>">
					</div>
					<div class="form-group">
						<input type="text" name="cantidad" required placeholder="Cantidad" class="form-control" value="<?php echo $f['cantidad'] ?>">
					</div>
					<div class="form-group">
						<input type="number" step="0.01" required name="precio" placeholder="Precio" class="form-control" value="<?php echo $f['precio'] ?>">
					</div>
					<div class="form-group">
						<select name="categoria" required class="form-control">
							<option value="<?php echo $f['categoria'] ?>"><?php echo $f['categoria'] ?></option>
							<option value="ROPA HOMBRE">ROPA HOMBRE</option>
            	<option value="ROPA MUJER">ROPA MUJER</option>
            	<option value="BOLSOS">BOLSOS</option>
            	<option value="ACCESORIOS">ACCESORIOS</option>
            	<option value="JOYERIA">JOYERIA</option>
            	<option value="RELOJES">RELOJES</option>
						</select>
					</div>
					<div class="form-group">
						<img src="<?php echo $f['foto'] ?>" width="200">
					</div>
					<div class="form-group">
						<input type="file" name="imagen" class="form-control">
					</div>
					<input type="hidden" name="anterior" value="<?php echo $f['foto'] ?>">
					<div class="form-group">
						<textarea name="descripcion" required cols="30" rows="10" class="form-control"><?php echo $f['descripcion'] ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Editar artículo</button>

				</form>
			</div>
		</div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>