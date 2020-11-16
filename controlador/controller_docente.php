<?php
require_once("dao/dao_docente.php");

class Controlador{
  private $ConjuntosDAO;

    //Al crear el objeto del manejador, se crea el Objeto DAO
  function __construct(){
    $this->ConjuntosDAO=new dao_docente();
  }

      //ESTA FUNCION ES LA ENCARGADA DE DECIDIR QUE ACCION O FUNCION SE DEBE EJECUTAR
  function Index($cmd) {
    switch ($cmd) {
      //SE LEEN LOS CONJUNTOS DE FRASES REGISTRADOS EN LA BASE DE DATOS Y SE ENVIAN AL CLIENTE
      case "Registrar_Docente":
      $this->Registrar_Docente();
      break;

      case "Consultar_Docente":
      $this->Consultar_Docente();
      break;


    }
  }

    //Esta función va al Módelo, y trae las Unidades de Medidas
  public function Registrar_Docente(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Identificacion = $_POST["Identificacion"];
    $Primer_Nombre = $_POST["Primer_Nombre"];
    $Segundo_Nombre = $_POST["Segundo_Nombre"];
    $Primer_Apellido = $_POST["Primer_Apellido"];
    $Segundo_Apellido = $_POST["Segundo_Apellido"];
    $Sexo = $_POST["Sexo"];
    $Telefono_Fijo = $_POST["Telefono_Fijo"];
    $Telefono_Movil = $_POST["Telefono_Movil"];
    $Correo_Electronico = $_POST["Correo_Electronico"];
    $Sedes = $_POST["Sedes"];
    $Estado = $_POST["Estado"];

    $Datos=$this->ConjuntosDAO->Registrar_Docente($Identificacion, $Primer_Nombre, $Segundo_Nombre, $Primer_Apellido, $Segundo_Apellido,$Sexo, $Telefono_Fijo, $Telefono_Movil, $Correo_Electronico, $Sedes, $Estado);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }

//Consultar Docente
  public function Consultar_Docente(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Identificacion = $_POST["Identificacion"];
    $Datos=$this->ConjuntosDAO->Consultar_Docente($Identificacion);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }


}





?>