<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<title>Inicio</title>
	<br>
	<br>
	<br>
</head>
<body>
	<form>
		<center><h1 style="font-family: Times New Roman">Proyecto Ausentismo</h1></center>
		<br>
		<br>

		<div class="row">
			<div class='col-md-6 col-lg-5'>
			</div>

			<div class='col-md-6 col-lg-2'>
				<div class='form-group'>
					<input type="text" name="Usuario_Ingreso" id="Usuario_Ingreso" class="form-control" placeholder="Usuario" required autofocus>
				</div>
			</div>
		</div>

		<div class="row">
			<div class='col-md-6 col-lg-5'>
			</div>
			<div class='col-md-6 col-lg-2'>
				<div class='form-group'>
					<input type="password" name="Contrasena_Ingreso" id="Contrasena_Ingreso" class="form-control" placeholder="Contraseña" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class='col-md-6 col-lg-5'>
			</div>

			<div class='col-md-6 col-lg-2'>
				<a class="btn btn-lg btn-success btn-block btn-signin" onclick="Autenticacion();">Ingresar al sistema</a>
			</div>   

		</div>
	
</form>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center" id="tituloModal">Modal Header</h4>
			</div>
			<div class="modal-body">
				<p id="textoModal">Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div>


</body>
</html>