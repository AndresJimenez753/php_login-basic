<?php

session_start();
$user = $_SESSION['username'];

if(!isset($user)){
	header("location: login.php");
}else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloHome.css">
	<link rel="stylesheet" href="css/estiloGeneral.css">
	<link rel="icon" href="img/Crono.png">

	<!-- Chart Libreria de graficos-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

	<!-- Ionicons -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="css/adminlte.min.css">

	<title>Dashboard</title>
</head>
<body>
	<div class="container-fluid">
		<div id="sidemenu" class="menu-expanded navigation">
			<!-- Header -->
			<div id="header">
				<div id="title"><span>Dashboard - PHP</span></div>
				<div id="menu-btn" onclick="toggleMenu();">
					<i class="fa fa-bars fa-1x" aria-hidden="true" style="margin-left: 25%;"></i>
				</div>
			</div>

			<!-- Profile -->
			<div id="profile">
				<div id="photo"><img src="img/user-admin.jpg" alt="" width="400px"></div>

				<div id="name" style="font-size: 18px;"><span><?php echo $user;?></span></div>
			</div>

			<!-- Items -->
			<div id="menu-items">
				<div class="item">
					<a href="index.php">
						<div class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
						<div class="title"><span>Home / Dashboard</span></div>
					</a>
				</div>
				<div class="item separator"></div>
			</div>
		</div>

		<div class="main">
			<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
				<button class="navbar-toggler toggle" type="button" data-toggle="collapse" id="menu-btn" onclick="toggleMenu();"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Dashboard / Home </a>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Configuracion
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="Error404.html"><i class="fa fa-cog"
										aria-hidden="true"></i> Dashboard</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="Contraseña.html"><i class="fa fa-lock"
										aria-hidden="true"></i> Contraseña</a>
								<a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>
									Información Personal</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="Error500.html"><i class="fa fa-user-secret"
										aria-hidden="true"></i> Datos y Privacidad</a>
								<a class="dropdown-item" href="Error404.html"><i class="fa fa-info-circle"
										aria-hidden="true"></i> Reportar un Error</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logic/salir.php" style="color:#f00;"><i class="fa fa-sign-out"
										aria-hidden="true"></i> Salir</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Administrador</a>
						</li>
					</ul>
				</div>
			</nav>

		</div>
	</div>

	<script>
		function toggleMenu() {
			let toggle = document.querySelector('.toggle');
			let navigation = document.querySelector('.navigation');
			let main = document.querySelector('.main');
			toggle.classList.toggle('active');
			navigation.classList.toggle('active');
			main.classList.toggle('active');
		}
	</script>
	<script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>
	<script src="https://use.fontawesome.com/bf85c0e67b.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>

	<?php
	}
	?>
</body>
</html>
