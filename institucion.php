<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<script src="js/contenido.js"></script>
	<title>Institución</title>
	<br>
	<br>
	<br>
</head>
<body>
	<form id="form_registrar_institucion">
		<center><h1 style="font-family: Times New Roman">Gestionar Institución</h1></center>

		<div class="row">
			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Nit:</label>
					<input type="text" name="Nit" id="Nit" class="form-control" required autofocus>
				</div>
			</div>
			<div class='col-md-6 col-lg-9'>
				<div class='form-group'>
					<label >Nombre:</label>
					<input type="text" name="Nombre_Institucion" id="Nombre_Institucion" class="form-control" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Dirección:</label>
					<input type="text" name="Direccion_Institucion" id="Direccion_Institucion" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Teléfono Fijo:</label>
					<input type="text" name="Telefono_Fijo" id="Telefono_Fijo" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<a class="btn btn-lg btn-success btn-block btn-signin" onclick="Registrar_Institucion();">Registrar</a>
			</div> 
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
				<h4 class="modal-title text-center" id="tituloModal">¿</h4>
			</div>
			<div class="modal-body">
				<p id="textoModal">¿</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div>


</body>
</html>
