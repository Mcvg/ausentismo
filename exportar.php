<!DOCTYPE html>
<html>
<head>
	<title>Exportar</title>
	<?php 
	include 'head.php'; 
	?>
    <link href="css/freelancer.css" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="js/contenido.js"></script>
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
	<script language="javascript">
	$(document).ready(function() {
		$(".botonExcel").click(function(event) {
			$("#datos_a_enviar").val( $("<div>").append( $(".Exportar_a_Excel").eq(0).clone()).html());
			$("#FormularioExportacion").submit();
		});
	});
</script>

<style type="text/css">
.botonExcel{cursor:pointer;}
</style>
</head>
<body>

<br>
<br>
    <div class='col-md-6 col-lg-3'>
                    <form method="get" action="inicio.php">
                <button type="submit">Menú</button></form>
        </div>
	<form id="form_registrar_perfil">
		<center><h1 style="font-family: Times New Roman">Exportar ausentismos</h1></center>

		<div class="row">

			<div class='col-md-6 col-lg-3'>

                <a class="btn btn-lg btn-success btn-block btn-signin" onclick="Consultar_Todos_Ausentismos();" class="botonExcel">Exportar</a>

			</div>  

		</div>

	</form>
	<br>
	<br>
	<br>
	<div  class="Exportar_a_Excel"  id="tabla_Ausentismo_Todos">          
		<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
		</table>
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
	<div class='col-md-6 col-lg-2'>
		<form action="fichero.php" method="post" target="_blank" id="FormularioExportacion">
			<p><a href="fichero.php" class="botonExcel" >Exportar a Excel </a> 
                <!--<img src="export_to_excel.gif" class="botonExcel" /></p>-->
			<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

		</form>
	</div>

</body>
</html>