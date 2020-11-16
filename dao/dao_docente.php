<?php
include_once str_replace("/Controlador","",$absolute_path).'/modelo/ClassPDO.php'; 

class dao_docente
{	
	function Consultar_Docente($Identificacion){

		$pdo=new ClassPDO();
		$sql = "SELECT Docente_Id, Identificacion, Primer_Nombre, Primer_Apellido, Sexo, Telefono_Fijo, Telefono_Movil, Correo_Electronico FROM Docente WHERE Identificacion = '$Identificacion'";
		return $pdo->Consulta($sql,"S","ASSOC");

	}

	function Registrar_Docente($Identificacion, $Primer_Nombre, $Segundo_Nombre, $Primer_Apellido, $Segundo_Apellido,$Sexo, $Telefono_Fijo,$Telefono_Movil, $Correo_Electronico, $Sedes, $Estado){

		$pdo=new ClassPDO();
		$sql = "INSERT INTO docente (Identificacion, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Sexo, Telefono_Fijo, Telefono_Movil, Correo_Electronico, Sede_Id_Docente, Estado) VALUES ('$Identificacion', '$Primer_Nombre', '$Segundo_Nombre', '$Primer_Apellido', '$Segundo_Apellido', '$Sexo', '$Telefono_Fijo', '$Telefono_Movil', '$Correo_Electronico', '$Sedes', '$Estado')";
		$pdo->Ejecutar($sql);
		$mensaje = "Registro Insertado";
		return $mensaje;
	}

}

?>