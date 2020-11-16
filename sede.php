<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<script src="js/contenido.js"></script>
	<title>Sedes</title>
	<br>
	<br>
	<br>
</head>
<body>
	<form id="form_registrar_sedes">
		<center><h1 style="font-family: Times New Roman">Gestionar Sedes</h1></center>

		<div class="row">
			<div class='col-md-6 col-lg-4'>
				<div class='form-group'>
					<label>Nombre:</label>
					<input type="text" name="Nombre_Sede" id="Nombre_Sede" class="form-control" required autofocus>
				</div>
			</div>
			<div class='col-md-6 col-lg-4'>
				<div class='form-group'>
					<label >Dirección:</label>
					<input type="text" name="Direccion_Sede" id="Direccion_Sede" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-4'>
				<div class='form-group'>
					<label>Teléfono Fijo:</label>
					<input type="text" name="Telefono_Fijo_Sede" id="Telefono_Fijo_Sede" class="form-control" required>
				</div>
			</div>
		</div>


		<div class="row">

			<div class='col-md-6 col-lg-6'>
				<div class='form-group'>
					<label>Institución:</label>
					<select id="Institucion_Id_Sede" name="Institucion_Id_Sede" class="form-control">						
					</select>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<a class="btn btn-lg btn-success btn-block btn-signin" onclick="Registrar_Sede();">Registrar</a>
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




