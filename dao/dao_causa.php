<?php
include_once str_replace("/Controlador","",$absolute_path).'/modelo/ClassPDO.php'; 

class dao_causa
{	
	function Consultar_Causas(){

		$pdo=new ClassPDO();
		$sql = "SELECT Causa_Id, Nombre FROM causa";
		return $pdo->Consulta($sql,"S","ASSOC");

	}
}

?>