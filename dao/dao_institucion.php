<?php
include_once str_replace("/Controlador","",$absolute_path).'/modelo/ClassPDO.php'; 

class dao_institucion
{	


	function Registrar_Institucion($Nit, $Nombre_Institucion, $Direccion_Institucion, $Telefono_Fijo){

		$pdo=new ClassPDO();
		$sql = "INSERT INTO institucion (Nit, Nombre_Institucion, Direccion_Institucion, Telefono_Fijo) VALUES ('$Nit', '$Nombre_Institucion', '$Direccion_Institucion', '$Telefono_Fijo')";
		$pdo->Ejecutar($sql);
		$mensaje = "Registro Insertado";
		return $mensaje;
	}



	function Consultar_Institucion(){

		$pdo=new ClassPDO();
		$sql = "SELECT Institucion_Id, Nombre_Institucion FROM institucion";
		return $pdo->Consulta($sql,"S","ASSOC");
	}

}

?>