<?php
require_once("dao/dao_institucion.php");

class Controlador{
  private $ConjuntosDAO;

    //Al crear el objeto del manejador, se crea el Objeto DAO
  function __construct(){
    $this->ConjuntosDAO=new dao_institucion();
  }

      //ESTA FUNCION ES LA ENCARGADA DE DECIDIR QUE ACCION O FUNCION SE DEBE EJECUTAR
  function Index($cmd) {
    switch ($cmd) {
      //SE LEEN LOS CONJUNTOS DE FRASES REGISTRADOS EN LA BASE DE DATOS Y SE ENVIAN AL CLIENTE
      case "Registrar_Institucion":
      $this->Registrar_Institucion();
      break;

      case "Consultar_Institucion":
      $this->Consultar_Institucion();
      break;


    }
  }

    //Esta función va al Módelo, y trae las Unidades de Medidas
  public function Registrar_Institucion(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Nit = $_POST["Nit"];
    $Nombre_Institucion = $_POST["Nombre_Institucion"];
    $Direccion_Institucion = $_POST["Direccion_Institucion"];
    $Telefono_Fijo = $_POST["Telefono_Fijo"];


    $Datos=$this->ConjuntosDAO->Registrar_Institucion($Nit, $Nombre_Institucion, $Direccion_Institucion, $Telefono_Fijo);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }

  public function Consultar_Institucion(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores

    $Datos=$this->ConjuntosDAO->Consultar_Institucion();
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }


}





?>