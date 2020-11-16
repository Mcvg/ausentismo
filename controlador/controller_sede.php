<?php
require_once("dao/dao_sede.php");

class Controlador{
    private $ConjuntosDAO;

    //Al crear el objeto del manejador, se crea el Objeto DAO
    function __construct(){
        $this->ConjuntosDAO=new dao_sede();
    }

      //ESTA FUNCION ES LA ENCARGADA DE DECIDIR QUE ACCION O FUNCION SE DEBE EJECUTAR
    function Index($cmd) {
        switch ($cmd) {
      //SE LEEN LOS CONJUNTOS DE FRASES REGISTRADOS EN LA BASE DE DATOS Y SE ENVIAN AL CLIENTE
          case "Consultar_Sedes":
          $this->Consultar_Sedes();
          break;

          case "Registrar_Sede":
          $this->Registrar_Sede();
          break;


      }
  }

    //Esta función va al Módelo, y trae las Unidades de Medidas
  public function Consultar_Sedes(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores

    $Datos=$this->ConjuntosDAO->Consultar_Sedes();
    $return["Datos"]=$Datos;
    echo json_encode($return);
}

  public function Registrar_Sede(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Nombre_Sede = $_POST["Nombre_Sede"];
    $Direccion_Sede = $_POST["Direccion_Sede"];
    $Telefono_Fijo_Sede = $_POST["Telefono_Fijo_Sede"];
    $Institucion_Id_Sede = $_POST["Institucion_Id_Sede"];


    $Datos=$this->ConjuntosDAO->Registrar_Sede($Nombre_Sede, $Direccion_Sede, $Telefono_Fijo_Sede, $Institucion_Id_Sede);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }



}



?>