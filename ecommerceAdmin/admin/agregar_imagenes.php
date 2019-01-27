<!-- agregamos la cabecera de la página principal -->
<?php include '../extend/header.php'; 

$clave = htmlentities($_GET['clave']);

$sel = $con->prepare("SELECT producto,foto FROM inventario WHERE clave = ?");
$sel->execute(array($clave));
  	if ($f = $sel->fetch()) { 
  	}
?>
<br>
<div class="container">
	<div class="card text-white bg-dark">
			<div class="card-header">
      	<h4 class="card-title">Agregar imagenes</h4>
    	</div>
			<div class="card-body">
				<h4 class="card-title"><img src="<?php echo $f['foto'] ?>" width="150" height="150"> <?php echo $f['producto'] ?></h4>
				<form action="ins_imagenes.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="clave" value="<?php echo $clave ?>">
					<div class="form-group">
						<input type="file" name="imagen[]" class="form-control" multiple="" >
					</div>
					<input type="submit" value="Guardar" class="btn btn-primary">
				</form>
			</div>
		</div>
		
<?php 
$sel = null;
 ?>
 <div class="row">

 	<?php 
 		$sel_img = $con->prepare("SELECT ruta,clave FROM imagenes WHERE clave_producto = ?");
 		$sel_img->execute(array($clave));
 		  	while ($f_img = $sel_img->fetch()) { 	
 	 ?>
 		
		 <!-- mostrar imagenes -->
 		<div class="col-3">
 			<div class="card" style="width: 16rem; margin-top: 5%;">

				<a href="#" onclick="bootbox.confirm('¡Seguro que quiere borrar la imagen seleccionado!', function(result){if (result == true){ location.href='eliminar_imagen.php?clave_producto=<?php echo $clave ?>&clave_img=<?php echo $f_img['clave'] ?>&ruta=<?php echo $f_img['ruta'] ?>'; }})" ><img src="<?php echo $f_img['ruta'] ?>" class="card-img-top"></a>

 			</div>
 		</div>
		<!-- end mostrar imagenes -->
 	<?php 
 	}
 		  	$sel_img = null;
 		  	$con = null;
 	 ?>
 </div>

</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>