<?php
include_once str_replace("/Controlador","",$absolute_path).'/modelo/ClassPDO.php'; 

class dao_perfil
{	

	function Registrar_Perfil($Nombre_Perfil){

		$pdo=new ClassPDO();
		$sql = "INSERT INTO perfil (Nombre_Perfil) VALUES ('$Nombre_Perfil')";
		$pdo->Ejecutar($sql);
		$mensaje = "Registro Insertado";
		return $mensaje;
	}

	function Consultar_Perfil(){

		$pdo=new ClassPDO();
		$sql = "SELECT Perfil_Id, Nombre_Perfil FROM perfil";
		return $pdo->Consulta($sql,"S","ASSOC");
	}

}

?>