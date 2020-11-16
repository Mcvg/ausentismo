<?php 

include_once str_replace("/Controlador","",$absolute_path).'/modelo/ClassPDO.php'; 

class dao_usuario
{

	function Autenticacion($Usuario_Ingreso, $Contrasena_Ingreso){

		$pdo=new ClassPDO();
		$sql = "SELECT Usuario_Id, Identificacion, Primer_Nombre, Primer_Apellido, Usuario_Ingreso, Contrasena_Ingreso, Estado, Perfil_Id_Usuario FROM usuario WHERE Usuario_Ingreso = '$Usuario_Ingreso' AND Contrasena_Ingreso = '$Contrasena_Ingreso'";
		return $pdo->Consulta($sql,"S","ASSOC");
	}

	function Registrar_Usuario($Identificacion, $Primer_Nombre, $Segundo_Nombre, $Primer_Apellido, $Segundo_Apellido, $Telefono_Fijo,$Telefono_Movil, $Correo_Electronico, $Usuario_Ingreso, $Contrasena_Ingreso, $Perfil_Id_Usuario, $Estado){

		$pdo=new ClassPDO();
		$sql = "INSERT INTO usuario (Identificacion, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Telefono_Fijo, Telefono_Movil, Correo_Electronico, Usuario_Ingreso, Contrasena_Ingreso, Perfil_Id_Usuario, Estado) VALUES ('$Identificacion', '$Primer_Nombre', '$Segundo_Nombre', '$Primer_Apellido', '$Segundo_Apellido', '$Telefono_Fijo', '$Telefono_Movil', '$Correo_Electronico','$Usuario_Ingreso', '$Contrasena_Ingreso',  '$Perfil_Id_Usuario', '$Estado')";
		$pdo->Ejecutar($sql);
		$mensaje = "Registro Insertado";
		return $mensaje;
	}
	


}



?>