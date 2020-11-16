<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<script src="js/contenido.js"></script>
	<title>Perfil</title>
	<br>
	<br>
	<br>
</head>
<body>
	<form id="form_registrar_perfil">
		<center><h1 style="font-family: Times New Roman">Gestionar Perfiles</h1></center>

		<div class="row">
			<div class='col-md-6 col-lg-4'>
				<div class='form-group'>
					<label>Nombre Perfil:</label>
					<input type="text" name="Nombre_Perfil" id="Nombre_Perfil" class="form-control" required autofocus>
				</div>
			</div>
			<div class='col-md-6 col-lg-3'>
				<a class="btn btn-lg btn-success btn-block btn-signin" onclick="Registrar_Perfil();">Registrar</a>
			</div>  

		</div>

</form>
<br>
<br>
<br>
<div class="table-responsive" id="tabla_perfil">          
	
</div>



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