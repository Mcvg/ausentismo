<!DOCTYPE html>
<html>
<head>
	<?php 
	include 'head.php'; 
	?>
	<script src="js/contenido.js"></script>
	<title>Registrar Ausentismo</title>
	<br>
	<br>
	<br>
</head>
<body>
	<form>
		<h3 style="text-align: center;font-family: Times New Roman">Registrar Ausentismo</h3><br>

		<div class="row">		
			<div class="col-md-6 col-lg-4">
				<div class="form-group">						
					<label>Identificación:</label>
					
					<input type="text" name="Identificacion" id="Identificacion" class="form-control">	
				</div>	
			</div>

			<div class='col-md-6 col-lg-3'>
				<a class="btn btn-lg btn-success btn-block" onclick="Consultar_Docentes();Consultar_Ausentismos();">Buscar</a>
			</div>   

		</div>

	</form>

	<form id="formulario_ausentismo">
		<div class="row">
			<h5>Datos Básicos</h5>
			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					<label>Identificación</label>
					<input type="hidden" name="Docente_Id" id="Docente_Id" class="form-control">
					<input type="" name="Identificacion_consultado" id="Identificacion_consultado" class="form-control" readonly>	
				</div>	
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					<label>Nombres</label>
					<input type="" name="Nombres_Consultados" id="Nombres_Consultados" class="form-control" readonly>	
				</div>	
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					<label>Apellidos</label>
					<input type="" name="Apellidos_Consultados" id="Apellidos_Consultados" class="form-control" readonly>
				</div>	
			</div>
		</div>

		<div class="row">
			<h5>Datos Contacto</h5>
			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					<label>Teléfono Fijo</label>
					<input type="" name="Telefono_Fijo" id="Telefono_Fijo" class="form-control" readonly>	
				</div>	
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					<label>Teléfono Móvil</label>
					<input type="" name="Telefono_Movil" id="Telefono_Movil" class="form-control" readonly>	
				</div>	
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					<label>Correo Electrónico</label>
					<input type="" name="Correo_Electronico" id="Correo_Electronico" class="form-control" readonly>
				</div>	
			</div>

		</div>

		<div class="row">
			<div class="col-md-6 col-lg-12">
				<div class="form-group">
					<label>Causa Ausentismo</label>
					<select name="Causa_Id_Ausentismo" id="Causa_Id_Ausentismo" class="form-control">				
					</select>
				</div>	
			</div>

		</div>

		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="form-group">
					<label>Fecha Incial</label>
					<input type="date" name="Fecha_Incial" id="Fecha_Inicial" class="form-control">
				</div>	
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="form-group">
					<label>Hora Incial</label>
					<input type="time" name="Hora_Inicial" id="Hora_Inicial" class="form-control">
				</div>	
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="form-group">
					<label>Fecha Final</label>
					<input type="date" name="Fecha_Final" id="Fecha_Final" class="form-control">
				</div>	
			</div>

			<div class="col-md-6 col-lg-3">
				<div class="form-group">
					<label>Hora Final</label>
					<input type="time" name="Hora_Final" id="Hora_Final" class="form-control">
				</div>	
			</div>

			
		</div>

		<div class="row">
			<div class="col-md-6 col-lg-6">			
				<div class="form-group">
				<label>Archivo Soporte (Ejm: Soporte Incapacidad,Soporte Permiso, etc)</label>
				<input type="file" name="archivo" id="archivo" class="form-control">
			</div>	

		</div>

	</div>

	<div id="botones"></div>
	<div class="row">
		<div class='col-md-6 col-lg-6' id="">
		</div>
		<div class='col-md-6 col-lg-3' id="btnguardar">
		</div>
		<div class='col-md-6 col-lg-3' id="btncancelar">
		</div>    				
	</div>

</div>
</form>
<br>
<br>
<div class="table-responsive" id="tabla_Ausentismo">          
	
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