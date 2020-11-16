<?php
require_once("dao/dao_causa.php");

class Controlador{
    private $ConjuntosDAO;

    //Al crear el objeto del manejador, se crea el Objeto DAO
    function __construct(){
        $this->ConjuntosDAO=new dao_causa();
    }

      //ESTA FUNCION ES LA ENCARGADA DE DECIDIR QUE ACCION O FUNCION SE DEBE EJECUTAR
    function Index($cmd) {
        switch ($cmd) {
      //SE LEEN LOS CONJUNTOS DE FRASES REGISTRADOS EN LA BASE DE DATOS Y SE ENVIAN AL CLIENTE
          case "Consultar_Causas":
          $this->Consultar_Causas();
          break;

      }
  }

    //Esta función va al Módelo, y trae las Unidades de Medidas
  public function Consultar_Causas(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores

    $Datos=$this->ConjuntosDAO->Consultar_Causas();
    $return["Datos"]=$Datos;
    echo json_encode($return);
}
}



?>