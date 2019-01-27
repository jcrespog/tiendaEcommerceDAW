<?php 
/* incluimos la cabecera y las alertas botbox */
include '../extend/headerphp.php';
include '../extend/alertas.php';


/* inicio lógica  eliminación de articulos */
$clave = htmlentities($_GET['clave']);
$foto = htmlentities($_GET['foto']);
$pagina = htmlentities($_GET['pag']);

if ($pagina == "categorias.php") {
	$opc = htmlentities($_GET['opc']);
	$pagina = $pagina.'?opc='.$opc;
}


$del = $con->prepare("DELETE FROM inventario WHERE clave = :clave ");
     $del->bindparam(':clave', $clave);
      
 	if ($del->execute()){
 		
 		if ($foto != 'foto_producto/producto.png') {
 			unlink($foto);
 		}


 		$sel = $con->prepare("SELECT ruta FROM imagenes WHERE clave_producto = ?");
 		$sel->execute(array($clave));
 		  	while ($f = $sel->fetch()) { 
 		  		unlink($f['ruta']);
 		  	}
 		  	$sel = null;

 			$del2 = $con->prepare("DELETE FROM imagenes WHERE clave_producto = :clave ");
 		  $del2->bindparam(':clave', $clave);
			$del2->execute();
 		 	$del2 = null;

 		 echo alerta('¡El articulo ha sido eliminado!',$pagina);

 	}else{
 		echo alerta('¡El articulo no ha podido ser eliminado!',$pagina);
 	}


 	$del = null;
 	$con = null;

 ?> 
 </body>
 </html>