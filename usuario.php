<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<script src="js/contenido.js"></script>
	<title>Usuarios</title>
	<br>
	<br>
	<br>
</head>
<body>
	<form id="form_registrar_usuario">
		<center><h1 style="font-family: Times New Roman">Gestionar Usuarios</h1></center>

		<div class="row">
			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Identificación:</label>
					<input type="text" name="Identificacion" id="Identificacion" class="form-control" required autofocus>
				</div>
			</div>
		</div>

		<div class="row">
			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label >Primer Nombre:</label>
					<input type="text" name="Primer_Nombre" id="Primer_Nombre" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Segundo Nombre:</label>
					<input type="text" name="Segundo_Nombre" id="Segundo_Nombre" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Primer Apellido:</label>
					<input type="text" name="Primer_Apellido" id="Primer_Apellido" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Segundo Apellido:</label>
					<input type="text" name="Segundo_Apellido" id="Segundo_Apellido" class="form-control" required>
				</div>
			</div>

		</div>

		<div class="row">

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Teléfono Fijo:</label>
					<input type="text" name="Telefono_Fijo" id="Telefono_Fijo" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Teléfono Móvil:</label>
					<input type="text" name="Telefono_Movil" id="Telefono_Movil" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-6'>
				<div class='form-group'>
					<label>Correo Electrónico:</label>
					<input type="text" name="Correo_Electronico" id="Correo_Electronico" class="form-control" required>
				</div>
			</div>

		</div>

		<div class="row">
			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Usuario Ingreso</label>
					<input type="text" name="Usuario_Ingreso" id="Usuario_Ingreso" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Contraseña Ingreso</label>
					<input type="text" name="Contrasena_Ingreso" id="Contrasena_Ingreso" class="form-control" required>
				</div>
			</div>

			<div class='col-md-6 col-lg-6'>
				<div class='form-group'>
					<label>Sede:</label>
					<select id="Sedes" name="Sedes" class="form-control">						
					</select>
				</div>
			</div>

		</div>


		<div class="row">
			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Perfil:</label>
					<select id="Perfil_Id_Usuario" name="Perfil_Id_Usuario" class="form-control">						
					</select>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<div class='form-group'>
					<label>Estado:</label>
					<select id="Estado" name="Estado" class="form-control">
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>						
					</select>
				</div>
			</div>

			<div class='col-md-6 col-lg-3'>
				<a class="btn btn-lg btn-success btn-block btn-signin" onclick="Registrar_Usuario();">Registrar</a>
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
