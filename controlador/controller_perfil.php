<?php
require_once("dao/dao_perfil.php");

class Controlador{
  private $ConjuntosDAO;

    //Al crear el objeto del manejador, se crea el Objeto DAO
  function __construct(){
    $this->ConjuntosDAO=new dao_perfil();
  }

      //ESTA FUNCION ES LA ENCARGADA DE DECIDIR QUE ACCION O FUNCION SE DEBE EJECUTAR
  function Index($cmd) {
    switch ($cmd) {
      //SE LEEN LOS CONJUNTOS DE FRASES REGISTRADOS EN LA BASE DE DATOS Y SE ENVIAN AL CLIENTE
      case "Registrar_Perfil":
      $this->Registrar_Perfil();
      break;

      case "Consultar_Perfil":
      $this->Consultar_Perfil();
      break;


    }
  }

    //Esta función va al Módelo, y trae las Unidades de Medidas
  public function Registrar_Perfil(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Nombre_Perfil = $_POST["Nombre_Perfil"];

    $Datos=$this->ConjuntosDAO->Registrar_Perfil($Nombre_Perfil);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }

    public function Consultar_Perfil(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores

    $Datos=$this->ConjuntosDAO->Consultar_Perfil();
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }



}





?>