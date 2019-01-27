<?php include '../extend/header.php';?>

<div class="container" style="margin-top: 3%;">
	<h2>ROPA HOMBRE</h2>
	<div class="row">
		<?php 
		$sel_hombre = $con->prepare("SELECT foto, precio, producto, clave FROM inventario WHERE categoria = 'ROPA HOMBRE' AND cantidad > 0 ORDER BY id DESC LIMIT 4 ");
		$sel_hombre->execute();
		  	while ($f_hombre = $sel_hombre->fetch()) {
		 ?>
		 <div class="col-md-6 col-sm-12 col-lg-3">
		 	<div class="card" style="margin-top: 1%;">
		 		<img class="card-img-top" src="../ecommerceAdmin/admin/<?php echo $f_hombre['foto'] ?>" width="200" height="200">
		 		<div class="card-body">
		 			<h4 class="card-title"><?php echo $f_hombre['producto'] ?></h4>
		 			<p class="card-text"><?php echo number_format($f_hombre['precio'], 2)."€" ?></p>
		 			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_hombre['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>
		 			<button class="btn btn-danger text-white float-right" onclick="enviar(this.value)" value="<?php echo $f_hombre['clave'] ?>"><i class="fa fa-heart"></i></button>
		 		</div>
		 	</div>
		 </div>
		<?php }
		$sel_hombre = null;
		 ?>
	</div>
</div>

<hr>
<br>

<div class="container" style="margin-top: 3%;">
	<h2>ROPA MUJER</h2>
	<div class="row">
		<?php $sel_mujer = $con->prepare("SELECT foto, precio, producto, clave FROM inventario WHERE categoria = 'ROPA MUJER' AND cantidad > 0 ORDER BY id DESC LIMIT 4");
		$sel_mujer->execute();
		  	while ($f_mujer = $sel_mujer->fetch()) { ?>
		<div class="col-md-6 col-sm-12 col-lg-3" style="margin-top: 1%;">
			<div class="card" style="width: 100%;">
			  <img class="card-img-top" src="../ecommerceAdmin/admin/<?php echo $f_mujer['foto'] ?>" width="200" height="200" >
			  <div class="card-body">
			    <h4 class="card-title"><?php echo $f_mujer['producto'] ?></h4>
			    <p class="card-text"><?php echo number_format($f_mujer['precio'], 2)."€" ?></p>
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_mujer['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>
			    <button class="btn btn-danger text-white float-right"  onclick="enviar(this.value)" value="<?php echo $f_mujer['clave'] ?>"><i class="fa fa-heart"></i></button>
			  </div>
			</div>
		</div>
		<?php }
		$sel_mujer = null;
		 ?>
	</div>
</div>

<hr>
<br>

<div class="container" style="margin-top: 3%;">
	<h2>BOLSOS</h2>
	<div class="row">
		<?php $sel_bolsos = $con->prepare("SELECT foto, precio, producto, clave FROM inventario WHERE categoria = 'BOLSOS' AND cantidad > 0 ORDER BY id DESC LIMIT 4");
		$sel_bolsos->execute();
		  	while ($f_bolsos = $sel_bolsos->fetch()) { ?>
		<div class="col-md-6 col-sm-12 col-lg-3" style="margin-top: 1%;">
			<div class="card" style="width: 100%;">
			  <img class="card-img-top" src="../ecommerceAdmin/admin/<?php echo $f_bolsos['foto'] ?>" width="200" height="200" >
			  <div class="card-body">
			    <h4 class="card-title"><?php echo $f_bolsos['producto'] ?></h4>
			    <p class="card-text"><?php echo number_format($f_bolsos['precio'], 2)."€" ?></p>
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_bolsos['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>	
			    <button class="btn btn-danger text-white float-right"  onclick="enviar(this.value)" value="<?php echo $f_bolsos['clave'] ?>"><i class="fa fa-heart"></i></button>
			  </div>
			</div>
		</div>
		<?php }
		$sel_bolsos = null;
		 ?>
	</div>
</div>

<hr>
<br>

<div class="container" style="margin-top: 3%;">
	<h2>ACCESORIOS</h2>
	<div class="row">
		<?php $selacce = $con->prepare("SELECT foto, precio, producto, clave FROM inventario WHERE categoria = 'ACCESORIOS' AND cantidad > 0 ORDER BY id DESC LIMIT 4");
		$selacce->execute();
		  	while ($facce = $selacce->fetch()) { ?>
		<div class="col-md-6 col-sm-12 col-lg-3" style="margin-top: 1%;">
			<div class="card" style="width: 100%;">
			  <img class="card-img-top" src="../ecommerceAdmin/admin/<?php echo $facce['foto'] ?>" width="200" height="200" >
			  <div class="card-body">
			    <h4 class="card-title"><?php echo $facce['producto'] ?></h4>
			    <p class="card-text"><?php echo number_format($facce['precio'], 2)."€" ?></p>
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $facce['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>	
			    <button class="btn btn-danger text-white float-right"  onclick="enviar(this.value)" value="<?php echo $facce['clave'] ?>"><i class="fa fa-heart"></i></button>
			  </div>
			</div>
		</div>
		<?php }
		$sel_acce = null;
		 ?>
	</div>
</div>

<hr>
<br>

<div class="container" style="margin-top: 3%;">
	<h2>JOYERIA</h2>
	<div class="row">
		<?php $sel_joyas = $con->prepare("SELECT foto, precio, producto, clave FROM inventario WHERE categoria = 'JOYERIA' AND cantidad > 0 ORDER BY id DESC LIMIT 4");
		$sel_joyas->execute();
		  	while ($f_joyas = $sel_joyas->fetch()) { ?>
		<div class="col-md-6 col-sm-12 col-lg-3" style="margin-top: 1%;">
			<div class="card" style="width: 100%;">
			  <img class="card-img-top" src="../ecommerceAdmin/admin/<?php echo $f_joyas['foto'] ?>" width="200" height="200" >
			  <div class="card-body">
			    <h4 class="card-title"><?php echo $f_joyas['producto'] ?></h4>
			    <p class="card-text"><?php echo number_format($f_joyas['precio'],2)."€"?></p>
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_joyas['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>	
			    <button class="btn btn-danger text-white float-right"  onclick="enviar(this.value)" value="<?php echo $f_joyas['clave'] ?>"><i class="fa fa-heart"></i></button>
			  </div>
			</div>
		</div>
		<?php }
		$sel_joyas = null;
		 ?>
	</div>
</div>

<hr>
<br>

<div class="container" style="margin-top: 3%;">
	<h2>RELOJESRELOJES</h2>
	<div class="row">
		<?php $sel_reloj = $con->prepare("SELECT foto, precio, producto, clave FROM inventario WHERE categoria = 'RELOJES' AND cantidad > 0 ORDER BY id DESC LIMIT 4");
		$sel_reloj->execute();
		  	while ($f_reloj = $sel_reloj->fetch()) { ?>
		<div class="col-md-6 col-sm-12 col-lg-3" style="margin-top: 1%;">
			<div class="card" style="width: 100%;">
			  <img class="card-img-top" src="../ecommerceAdmin/admin/<?php echo $f_reloj['foto'] ?>" width="200" height="200" >
			  <div class="card-body">
			    <h4 class="card-title"><?php echo $f_reloj['producto'] ?></h4>
			    <p class="card-text"><?php echo number_format($f_reloj['precio'], 2)."€" ?></p>
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal_mas" value="<?php echo $f_reloj['clave'] ?>" onclick="modal(this.value)">Ver mas...</button>	
			    <button class="btn btn-danger text-white float-right"  onclick="enviar(this.value)" value="<?php echo $f_reloj['clave'] ?>"><i class="fa fa-heart"></i></button>
			  </div>
			</div>
		</div>
		<?php }
		$sel_reloj = null;
		$con = null;
		 ?>
	</div>
</div>

<div class="modal fade modal_mas" tabindex="-1" role="dialog" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div id="res" ></div>
		</div>
	</div>
</div>


<?php include '../extend/footer.php';?>
<script src="../js/deseos.js"></script>
<script src="../js/ver_mas.js" ></script>

</body>
</html>