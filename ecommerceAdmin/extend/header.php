<!-- incluimos la conexión  -->
<?php include '../conexion/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- bootstrap and styles css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<!-- icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
	<!-- end icons -->
	

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="../admin/index.php" class="navbar-brand"><i class="fas fa-wallet"></i> Cartera</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon" ></span>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item mr-auto">
					<a href="../admin/inventario.php" class="nav-link text-white"><i class="fas fa-box-open"></i> Artículos</a>
				</li>
				<li class="nav-item dropdown" >
					<a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorías <i class="fas fa-tags"></i></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="../admin/categorias.php?opc=ROPA HOMBRE" class="dropdown-item">ROPA HOMBRE <i class="fas fa-tshirt"></i></a>
            <a href="../admin/categorias.php?opc=ROPA MUJER" class="dropdown-item">ROPA MUJER <i class="fas fa-tshirt"></i></a>
						<a href="../admin/categorias.php?opc=BOLSOS" class="dropdown-item">BOLSOS <i class="fas fa-shopping-bag"></i></a>
						<a href="../admin/categorias.php?opc=ACCESORIOS" class="dropdown-item">ACCESORIOS <i class="fas fa-glasses"></i></a>
						<a href="../admin/categorias.php?opc=JOYERIA" class="dropdown-item">JOYERIA <i class="fas fa-ring"></i></a>
						<a href="../admin/categorias.php?opc=RELOJES" class="dropdown-item">RELOJES <i class="fas fa-clock"></i></a>
					</div>
				</li>
			</ul>
			<button class="btn btn-sm btn-danger" id="logout" >Cerrar Sesión <i class="fas fa-sign-out-alt"></i></button>
		</div>
	</nav>
	
