<!-- icluimos la cabecera de la página principal -->
<?php include '../extend/header.php'; ?>

<div class="container">
<br>
<!-- Productos -->
	<div class="card text-white bg-dark">
			<div class="card-header">
				<h4 class="card-title">Agregar un nuevo articulo</h4>
			</div>

			<div class="card-body">
				<form action="ins_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="producto" required placeholder="Nombre producto" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="cantidad" required placeholder="Cantidad" class="form-control">
					</div>
					<div class="form-group">
						<input type="number" step="0.01" required name="precio" placeholder="Precio" class="form-control">
					</div>
					<div class="form-group">
						<select name="categoria" required class="form-control">
							<option value="" disable="" selected="">Categoría</option>
            	<option value="ROPA HOMBRE">ROPA HOMBRE</option>
            	<option value="ROPA MUJER">ROPA MUJER</option>
            	<option value="BOLSOS">BOLSOS</option>
            	<option value="ACCESORIOS">ACCESORIOS</option>
            	<option value="JOYERIA">JOYERIA</option>
            	<option value="RELOJES">RELOJES</option>
						</select>
					</div>
					<div class="form-group">
						<input type="file" name="imagen" class="form-control">
					</div>
					<div class="form-group">
						<textarea name="descripcion" required cols="30" rows="10" class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
		<br>
		<!-- mostrar último articulo insertado en la base de datos -->
		<div class="card text-white bg-dark">
				<div class="card-header">
					<h4 class="card-title">último articulo registrado</h4>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>Foto</th>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Precio</th>
							<th>Categoria</th>
							<th>Desc.</th>
							<th></th>
							<th></th>
							<th></th>
						</thead>

						<tbody>
							<?php 
							$sel = $con->prepare("SELECT * FROM inventario ORDER BY id DESC limit 1 ");
							$sel->execute();
							  	while ($f = $sel->fetch()) {  ?>
							  	<tr>
							  		<td><img src="<?php echo $f['foto'] ?>" width="50" heigth="50" ></td>
							  		<td><?php echo $f['producto'] ?></td>
							  		<td><?php echo $f['cantidad'] ?></td>
							  		<td><?php echo number_format($f['precio'], 2)."€" ?></td>
							  		<td><?php echo $f['categoria'] ?></td>

										<!-- botones y iconos -->
							  		<td><?php echo substr($f['descripcion'] , 0, 100) ?>...</td>

							  		<td><a href="agregar_imagenes.php?clave=<?php echo $f['clave'] ?>" class="btn btn-success btn-md"><i class="fas fa-plus-square"></i></a></td>

							  		<td><a href="editar_producto.php?clave=<?php echo $f['clave'] ?>" class="btn btn-primary btn-md"><i class="fas fa-edit"></i></a></td>

							  		<td><a href="#" class="btn btn-danger btn-col-md" onclick="bootbox.confirm('¡Seguro que quiere borrar el articulo seleccionado!', function(result){ if (result == true){ location.href='eliminar_producto.php?clave=<?php echo $f['clave'] ?>&foto=<?php echo $f['foto'] ?>&pag=inventario.php';} })"><i class="fas fa-trash-alt"></i></a></td>
										<!-- end botones y iconos -->

							  	</tr>
							  	<?php 
							  	}
							  	$sel = null;
							  	$con = null;
							  	 ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- end mostrar último articulo insertado en la base de datos -->

</div>

<!-- incluimos el pie de página -->
<?php include '../extend/footer.php'; ?>

</body>
</html>