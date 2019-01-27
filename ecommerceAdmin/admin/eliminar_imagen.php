<?php 

/* incluimos la cabecera y las alertas botbox */
include '../extend/headerphp.php';
include '../extend/alertas.php';
/* end incluimos la cabecera y las alertas botbox */

$clave_producto = htmlentities($_GET['clave_producto']);
$clave_img = htmlentities($_GET['clave_img']);
$ruta = htmlentities($_GET['ruta']);

/* consulta para eliminar la imagen seleccionada */
$del = $con->prepare("DELETE FROM imagenes WHERE clave = :clave ");
     $del->bindparam(':clave', $clave_img);
      
 	if ($del->execute()){
 		unlink($ruta);
 		echo alerta('¡La imagen ha sido eliminada!','agregar_imagenes.php?clave='.$clave_producto.'');
 	}else{
 		echo alerta('¡La imagen no ha podido ser eliminada!','agregar_imagenes.php?clave='.$clave_producto.'');
 	}
 	$del = null;
 	$con = null;

 ?> 
 </body>
 </html>