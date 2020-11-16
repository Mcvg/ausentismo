<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<script src="js/contenido.js"></script>
	<title>Ausentismo Institución</title>
	<br>
	<br>
	<br>
</head>

<body>
	<center><h1>Ausentismo Por Institución</h1></center>
	<form>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="form-group">
					<label>Fecha Incial</label>
					<input type="date" name="Fecha_Inicial" id="Fecha_Inicial" class="form-control">
				</div>	
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="form-group">
					<label>Fecha Final</label>
					<input type="date" name="Fecha_Final" id="Fecha_Final" class="form-control">
				</div>	
			</div>

			<div class='col-md-6 col-lg-4'>
				<div class='form-group'>
					<label>Institución:</label>
					<select id="Institucion_Id_Sede" name="Institucion_Id_Sede" class="form-control">						
					</select>
				</div>
			</div>

			<div class='col-md-6 col-lg-2'>
				<a class="btn btn-lg btn-success btn-block btn-signin" onclick="Consultar_Ausentismo_Institucion();">Consultar</a>
			</div>
            
		</div>
	</form>
	<br>
	<br>
	<div class="table-responsive" id="tabla_Ausentismo_Institucion">          

	</div>


</body>
</html>