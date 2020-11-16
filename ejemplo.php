<!DOCTYPE html>
<html>
<head>

<title>JQuery Excel</title>
    <?php 
	include 'head.php'; 
	?>
	<script src="js/contenido.js"></script>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script language="javascript">
$(document).ready(function() {
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
});
</script>
<style type="text/css">
.botonExcel{cursor:pointer;}
</style>
</head>
<body>
<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
<tr>
<td>Celda1</td>
<td>Celda2</td>
<td>Celda3</td>
<td>Celda4</td>
<td>Celda5</td>
</tr>
<tr>
<td>Celda6</td>
<td>Celda7</td>
<td>Celda8</td>
<td>Celda9</td>
<td>Celda10</td>
</tr>
</table>
    <div class="table-responsive" id="tabla-perfil">
        
    </div>
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
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
    
</form>
        </div>
</body>
</html>