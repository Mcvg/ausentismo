<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<!-- Custom CSS -->
	<link href="css/freelancer.css" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--<script src="js/contenido.js"></script>-->
	<title>Incio</title>
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="contenido.php?contenido=inicio_incio">Ausentismo</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Institución
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="contenido.php?contenido=institucion">Institución</a></li>
								<li><a href="contenido.php?contenido=sede">Sede</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Usuarios
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="perfil.php">Perfil</a></li>
									<li><a href="usuario.php">Usuarios</a></li>
								</ul>
							</li>

							<li class="page-scroll">
								<a href="causa.php">Causas Ausentismo</a>
							</li>

							<li class="page-scroll">
								<a href="docente.php">Docentes</a>
							</li>



							<!--<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown">Ausentismo
									<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="contenido.php?contenido=causa">Causas</a></li>
										<li><a href="contenido.php?contenido=ausentismo">Ausentismo</a></li>
									</ul>
								</li>-->


								<!--<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Informes
										<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="contenido.php?contenido=inf_ausentismo_institucion">Ausentismo Por Institución</a></li>
											<li><a href="contenido.php?contenido=informes">informes</a></li>
										</ul>
									</li>-->
									<li class="page-scroll">
										<li><a href="registrar_ausentismo.php">Ausentismo</a></li>
									</li>

									<li class="page-scroll">
										<li><a href="inf_ausentismo_institucion.php">Ausentismo Por Institución</a></li>
									</li>
                            <li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown">Exportar
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="exportar.php">Docentes</a></li>
									<li><a href="usuario.php">instituciones</a></li>
								</ul>
							</li>

									<li class="page-scroll">
            <li><a href="exportar.php">Exportar</a></li>
									</li>
								</ul>



							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container-fluid -->
					</nav>
					<!--FIN NAV-->
					<header>
						<div class="container">
							<div id="contenido">

							</div>
						</div>
					</header>


				</body>
				</html>