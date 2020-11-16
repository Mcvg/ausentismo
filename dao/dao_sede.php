<?php
include_once str_replace("/Controlador","",$absolute_path).'/modelo/ClassPDO.php'; 

class dao_sede
{	
	function Consultar_Sedes(){

		$pdo=new ClassPDO();
		$sql = "SELECT Sede_Id, Nombre_Sede FROM sede";
		return $pdo->Consulta($sql,"S","ASSOC");

	}

	function Registrar_Sede($Nombre_Sede, $Direccion_Sede, $Telefono_Fijo_Sede, $Institucion_Id_Sede){

		$pdo=new ClassPDO();
		$sql = "INSERT INTO sede (Nombre_Sede, Direccion_Sede, Telefono_Fijo_Sede, Institucion_Id_Sede) VALUES ('$Nombre_Sede', '$Direccion_Sede', '$Telefono_Fijo_Sede', '$Institucion_Id_Sede')";
		$pdo->Ejecutar($sql);
		$mensaje = "Registro Insertado";
		return $mensaje;
	}




}

?>