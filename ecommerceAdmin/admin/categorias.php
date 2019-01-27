<!-- agregamos la cabecera de la página principal -->
<?php include '../extend/header.php';

$opc = htmlentities($_GET['opc']);
 ?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title">Inventario: <?php echo $opc ?></h4></div>
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
							if ($opc == 'GENERAL') {
							$sel = $con->prepare("SELECT * FROM inventario ORDER BY id ");
							$sel->execute();
							}else{
							$sel = $con->prepare("SELECT * FROM inventario WHERE categoria = ? ORDER BY id ");
							$sel->execute(array($opc));
							}
							
							  	while ($f = $sel->fetch()) {  ?>
							  	<tr>
							  		<td><img src="<?php echo $f['foto'] ?>" width="50" heigth="50" ></td>
							  		<td><?php echo $f['producto'] ?></td>
							  		<td><?php echo $f['cantidad'] ?></td>
							  		<td><?php echo "$". number_format($f['precio'], 2) ?></td>
							  		<td><?php echo $f['categoria'] ?></td>
							  		<td><?php echo substr($f['descripcion'] , 0, 100) ?>...</td>

										<!-- botones y iconos -->
							  		<td><a href="agregar_imagenes.php?clave=<?php echo $f['clave'] ?>" class="btn btn-success btn-md"><i class="fas fa-plus-square"></i></a></td>

							  		<td><a href="editar_producto.php?clave=<?php echo $f['clave'] ?>" class="btn btn-primary btn-md"><i class="fas fa-edit"></i></a></td>

							  		<td><a href="#" class="btn btn-danger btn-col-md" onclick="bootbox.confirm('¡Seguro que quiere borrar el articulo seleccionado!', function(result){ if (result == true){ location.href='eliminar_producto.php?clave=<?php echo $f['clave'] ?>&foto=<?php echo $f['foto'] ?>&pag=categorias.php&opc=<?php echo $opc ?>';} })"><i class="fas fa-trash-alt"></i></a></td>
							  	</tr>
									<!-- end botones y iconos -->

							  	<?php 
							  	}
							  	$sel = null;
							  	$con = null;
							  	 ?>
						</tbody>
					</table>

				

				</div>
			</div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>