<?php
require_once("dao/dao_usuario.php");

class Controlador{
  private $ConjuntosDAO;

    //Al crear el objeto del manejador, se crea el Objeto DAO
  function __construct(){
    $this->ConjuntosDAO=new dao_usuario();
  }

      //ESTA FUNCION ES LA ENCARGADA DE DECIDIR QUE ACCION O FUNCION SE DEBE EJECUTAR
  function Index($cmd) {
    switch ($cmd) {
      //SE LEEN LOS CONJUNTOS DE FRASES REGISTRADOS EN LA BASE DE DATOS Y SE ENVIAN AL CLIENTE
      case "Autenticacion":
      $this->Autenticacion();
      break;

      case "Registrar_Usuario":
      $this->Registrar_Usuario();
      break;

    }
  }

    //Esta función va al Módelo, y trae las Unidades de Medidas
  public function Autenticacion(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Usuario_Ingreso = $_POST["Usuario_Ingreso"];
    $Contrasena_Ingreso = $_POST["Contrasena_Ingreso"];
    $Datos=$this->ConjuntosDAO->Autenticacion($Usuario_Ingreso, $Contrasena_Ingreso);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }


  public function Registrar_Usuario(){
        //Las variables ERROR y MENSAJE se establecen para el control de Errores
    $Identificacion = $_POST["Identificacion"];
    $Primer_Nombre = $_POST["Primer_Nombre"];
    $Segundo_Nombre = $_POST["Segundo_Nombre"];
    $Primer_Apellido = $_POST["Primer_Apellido"];
    $Segundo_Apellido = $_POST["Segundo_Apellido"];
    $Telefono_Fijo = $_POST["Telefono_Fijo"];
    $Telefono_Movil = $_POST["Telefono_Movil"];
    $Correo_Electronico = $_POST["Correo_Electronico"];
    $Usuario_Ingreso = $_POST["Usuario_Ingreso"];
    $Contrasena_Ingreso = $_POST["Contrasena_Ingreso"];
    $Perfil_Id_Usuario = $_POST["Perfil_Id_Usuario"];
    $Estado = $_POST["Estado"];

    $Datos=$this->ConjuntosDAO->Registrar_Usuario($Identificacion, $Primer_Nombre, $Segundo_Nombre, $Primer_Apellido, $Segundo_Apellido, $Telefono_Fijo, $Telefono_Movil, $Correo_Electronico, $Usuario_Ingreso, $Contrasena_Ingreso,  $Perfil_Id_Usuario, $Estado);
    $return["Datos"]=$Datos;
    echo json_encode($return);
  }




}



?>