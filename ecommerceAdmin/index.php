<!-- página login administrador -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<title>Ecommerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- bootstrap and styles css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">

	<!-- icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- end icons -->

<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="#" class="navbar-brand"><i class="fas fa-tshirt"></i> Tienda </a>

		<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>

		<div id="my-nav" class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fas fa-users"></i> Zona Cliente</a>
        </li>
      </ul> 
    </div>
	</nav>
<!-- end navbar -->	

<!-- formulario login -->
	<div class="container">
		<div class="well">
			<h1 class="text-white">Iniciar Sesión <i class="fas fa-sign-in-alt"></i></h1>
			<div class="form-group">
				<input type="email" id="correo" class="form-control form-control-lg" placeholder="Correo">
			</div>
			<div class="form-group" >
				<input type="password" id="pass" class="form-control form-control-lg" placeholder="Contraseña" >
			</div>
			<button type="submit" class="btn btn-primary btn-block" id="login">ENTRAR</button>
		</div>
	</div>
<!-- end formulario login -->	

<!-- bootstrap jQuery ajax -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js" ></script>
<!-- end bootstrap jQuery ajax -->

<!-- login firebase -->
<script src="https://www.gstatic.com/firebasejs/5.8.1/firebase.js"></script>
<script src="js/app.js"></script>
<!-- end login firebase -->
</body>
</html>