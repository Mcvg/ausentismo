<?php
include_once str_replace("/Controlador","",$absolute_path).'/modelo/ClassPDO.php'; 

class dao_ausentismo
{	
	
	function Registrar_Ausentismo($Fecha_Registro, $Hora_Registro, $Fecha_Inicial, $Hora_Inicial, $Fecha_Final,$Hora_Final, $Causa_Id_Ausentismo, $Docente_Id){

		$pdo=new ClassPDO();
		$sql = "INSERT INTO ausentismo (Fecha_Registro, Hora_Registro, Fecha_Inicial, Hora_Inicial, Fecha_Final, Hora_Final, Causa_Id_Ausentismo, Docente_Id_Ausentismo) VALUES ('$Fecha_Registro', '$Hora_Registro', '$Fecha_Inicial', '$Hora_Inicial', '$Fecha_Final', '$Hora_Final', '$Causa_Id_Ausentismo', '$Docente_Id')";
		$pdo->Ejecutar($sql);
		$mensaje = "Registro Insertado";
		return $mensaje;
	}

	function Consultar_Ausentismos($Docente_Id_Ausentismo){

		$pdo=new ClassPDO();

		$sql = "SELECT ausentismo.Ausentismo_Id, ausentismo.Fecha_Inicial, ausentismo.Hora_Inicial, ausentismo.Fecha_Final, ausentismo.Hora_Final, ausentismo.Causa_Id_Ausentismo, ausentismo.Docente_Id_Ausentismo, 
		causa.Causa_Id, causa.Nombre 
		FROM ausentismo
		INNER JOIN causa ON ausentismo.Causa_Id_Ausentismo =  causa.Causa_Id
		WHERE Docente_Id_Ausentismo = '$Docente_Id_Ausentismo'";
		
		/*$sql = "SELECT Ausentismo_Id, Fecha_Inicial, Hora_Inicial, Fecha_Final, Hora_Final, Causa_Id_Ausentismo, Docente_Id_Ausentismo  FROM ausentismo WHERE Docente_Id_Ausentismo = '$Docente_Id_Ausentismo'";*/
		return $pdo->Consulta($sql,"S","ASSOC");

	}


    function Consultar_Ausentismo_Institucion($Institucion_Id, $Fecha_Inicial, $Fecha_Final){

		$pdo=new ClassPDO();

		$sql = "SELECT institucion.Institucion_Id, institucion.Nit, institucion.Nombre_Institucion, sede.Sede_id, sede.Nombre_Sede, sede.Institucion_Id_Sede, docente.Docente_Id, docente.Identificacion, 
		docente.Primer_Nombre, docente.Primer_Apellido, docente.Sede_Id_Docente, ausentismo.Ausentismo_Id, ausentismo.Fecha_Inicial, ausentismo.Hora_Inicial, ausentismo.Fecha_Final, ausentismo.Hora_Final, ausentismo.Causa_Id_Ausentismo, ausentismo.Docente_Id_Ausentismo, causa.Causa_id, causa.Nombre
		FROM institucion
		INNER JOIN sede ON institucion.Institucion_Id = sede.Institucion_Id_Sede
		INNER JOIN docente ON sede.Sede_id = docente.Sede_Id_Docente
		INNER JOIN ausentismo ON ausentismo.Docente_Id_Ausentismo = docente.Docente_Id
		INNER JOIN causa ON ausentismo.Causa_Id_Ausentismo = causa.Causa_id
		WHERE institucion.Institucion_Id = '$Institucion_Id' AND  ausentismo.Fecha_Inicial >= '$Fecha_Inicial' AND ausentismo.Fecha_Inicial <= '$Fecha_Final'
		ORDER BY  ausentismo.Fecha_Inicial,sede.Sede_id  Asc ";
		
		return $pdo->Consulta($sql,"S","ASSOC");

	}
    
	function Consultar_Todos_Ausentismos(){

		$pdo=new ClassPDO();

		$sql = "SELECT ausentismo.Ausentismo_Id, ausentismo.Fecha_Registro,ausentismo.Hora_Registro, ausentismo.Fecha_Inicial, ausentismo.Hora_Inicial, ausentismo.Fecha_Final, ausentismo.Hora_Final, ausentismo.Causa_Id_Ausentismo, ausentismo.Docente_Id_Ausentismo, 
		causa.Causa_Id, causa.Nombre 
		FROM ausentismo
		INNER JOIN causa ON ausentismo.Causa_Id_Ausentismo =  causa.Causa_Id";
		
		/*$sql = "SELECT Ausentismo_Id, Fecha_Inicial, Hora_Inicial, Fecha_Final, Hora_Final, Causa_Id_Ausentismo, Docente_Id_Ausentismo  FROM ausentismo WHERE Docente_Id_Ausentismo = '$Docente_Id_Ausentismo'";*/
		return $pdo->Consulta($sql,"S","ASSOC");

	}

}

?>