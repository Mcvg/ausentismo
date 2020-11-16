<?php
setlocale(LC_TIME, "es_CO.UTF-8");
setlocale(LC_ALL, "es_CO.UTF-8");
date_default_timezone_set('America/Bogota');

require_once("dao/dao_ausentismo.php");

class Controlador{


  private $ConjuntosDAO;

    //Al crear el objeto del manejador, se crea el Objeto DAO
  function __construct(){
    $this->ConjuntosDAO=new dao_ausentismo();
  }

      //ESTA FUNCION ES LA ENCARGADA DE DECIDIR QUE ACCION O FUNCION SE DEBE EJECUTAR
  function Index($cmd) {
    switch ($cmd) {
      //SE LEEN LOS CONJUNTOS DE FRASES REGISTRADOS EN LA BASE DE DATOS Y SE ENVIAN AL CLIENTE
      case "Registrar_Ausentismo":
      $this->Registrar_Ausentismo();
      break;

      case "Consultar_Ausentismos":
      $this->Consultar_Ausentismos();
      break;

      case "Consultar_Ausentismo_Institucion":
      $this->Consultar_Ausentismo_Institucion();
      break;
            
         
      case "Consultar_Todos_Ausentismos":
      $this->Consultar_Todos_Ausentismos();
      break;

    }
  }

    //Esta función va al Módelo, y trae las Unidades de Medidas
  public function Registrar_Ausentismo(){
    $Fecha_Registro = date("Y-m-d");
    $hora_aux = new DateTime();
    $Hora_Registro = $hora_aux->format('H:i:s');

    $Docente_Id = $_POST["Docente_Id"];
    $Causa_Id_Ausentismo = $_POST["Causa_Id_Ausentismo"];
    $Fecha_Inicial = $_POST["Fecha_Inicial"];
    $Hora_Inicial = $_POST["Hora_Inicial"];
    $Fecha_Final = $_POST["Fecha_Final"];
    $Hora_Final = $_POST["Hora_Final"];

    $Datos=$this->ConjuntosDAO->Registrar_Ausentismo($Fecha_Registro, $Hora_Registro, $Fecha_Inicial, $Hora_Inicial, $Fecha_Final,$Hora_Final, $Causa_Id_Ausentismo, $Docente_Id);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }


//Consultar Ausentismo
  public function Consultar_Ausentismos(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Docente_Id_Ausentismo = $_POST["Docente_Id_Ausentismo"];
    $Datos=$this->ConjuntosDAO->Consultar_Ausentismos($Docente_Id_Ausentismo);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }

    public function Consultar_Todos_Ausentismos(){
    $Datos=$this->ConjuntosDAO->Consultar_Todos_Ausentismos();
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }

  //Consultar Ausentismo
  public function Consultar_Ausentismo_Institucion(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Institucion_Id = $_POST["Institucion_Id"];
    $Fecha_Inicial = $_POST["Fecha_Inicial"];
    $Fecha_Final = $_POST["Fecha_Final"];
    $Datos=$this->ConjuntosDAO->Consultar_Ausentismo_Institucion($Institucion_Id, $Fecha_Inicial, $Fecha_Final);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }

}
?>

