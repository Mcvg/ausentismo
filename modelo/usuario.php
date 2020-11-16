<?php 

/**
* 
*/
class usuario 
{
	private $Identificacion;
	private $Primer_Nombre;
	private $Segundo_Nombre;
	private $Primer_Apellido;
	private $Segundo_Apellido;
	private $Telefono_Fijo;
	private $Telefono_Movil;
	private $Correo_Electronico;
	private $Usuario_Ingreso;
	private $Contrasena_Ingreso;
	private $Estado;
	private $Perfil_Id_Usuario;
	
	function __construct($Identificacion, $Primer_Nombre, $Segundo_Nombre, $Primer_Apellido, $Segundo_Apellido, $Telefono_Fijo, $Telefono_Movil, 
		$Correo_Electronico, $Usuario_Ingreso, $Contrasena_Ingreso, $Estado, $Perfil_Id_Usuario)
	{
		$this-> $Identificacion = $Identificacion;
		$this-> $Primer_Nombre = $Primer_Nombre;
		$this-> $Segundo_Nombre = $Segundo_Nombre;
		$this-> $Primer_Apellido = $Primer_Apellido;
		$this-> $Segundo_Apellido = $Segundo_Apellido;
		$this-> $Telefono_Fijo = $Telefono_Fijo;
		$this-> $Telefono_Movil = $Telefono_Movil;
		$this-> $Correo_Electronico = $Correo_Electronico;
		$this-> $Usuario_Ingreso = $Usuario_Ingreso;
		$this-> $Contrasena_Ingreso = $Contrasena_Ingreso;
		$this-> $Estado = $Estado;
		$this-> $Perfil_Id_Usuario = $Perfil_Id_Usuario;		
	}

	function getIdentificacion(){
		return $this-> $Identificacion
	}


}




 ?>