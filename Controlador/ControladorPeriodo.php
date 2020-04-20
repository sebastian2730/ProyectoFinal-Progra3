<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<?php
include "../../Controlador/DB_Conexion.php";
include "../../Modelo/ModeloPeriodo.php";


class ControladorPeriodo{
    //put your code here
    public function InsertarPeriodo($ModeloPeriodo) {
        $miCnx = new DB_Conexion();
         $connectDB = $miCnx->ConnectDB();


         if($connectDB->query("INSERT INTO proyectofinal_progra3.periodo(`periodo`) Values('" . $ModeloPeriodo->getPeriodo() . "')")) {

     return true;
                 }else{
                     return false;
                 }
                   $miCnx->DisconnectDB();
    }

    public function ConsultarPeriodo(){
    $datosPeriodo = new ArrayObject();
    $miCnx = new DB_Conexion();
    $connectDB = $miCnx->ConnectDB();

    $result = $connectDB->query("SELECT * FROM periodo");
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    if (empty($rows)) {
      return null;
      // code...
    }else{
      foreach ($rows as $i) {
        // code...
        $modeloPeriodo = new ModeloPeriodo();
        $modeloPeriodo->setIdPeriodo($i['idPeriodo']);
        $modeloPeriodo->setPeriodo($i['periodo']);

        $datosPeriodo->append($modeloPeriodo);
      }
      return $datosPeriodo;
    }
    $miCnx-DisconnectDB();
    }

    public function Eliminar($param){
    $miCnx = new DB_Conexion();
    $connectDB= $miCnx->ConnectDB();

    if($connectDB->query("DELETE FROM periodo "
    . "WHERE idPeriodo=".$param)){
      return true;
    }else{
      return false;
    }


    }

    public function SelecPeriodoDatos($idPeriodo){
   $datosPeriodo = new ArrayObject();
   $miCnx = new DB_Conexion();
   $connectDB = $miCnx->ConnectDB();
   $result = $connectDB->query("SELECT * FROM periodo WHERE idPeriodo='".$idPeriodo."'");

   $rows = $result->fetch_all(MYSQLI_ASSOC);

   if (empty($rows)) {
     return null;
     // code...
   }else{
     foreach ($rows as $i) {
       // code...
       $modeloPeriodo = new ModeloPeriodo();
       $modeloPeriodo->setIdPeriodo($i['idPeriodo']);
       $modeloPeriodo->setPeriodo($i['periodo']);

       $datosPeriodo->append($modeloPeriodo);
     }
     return $datosPeriodo;
   }
   $miCnx->DisconnectDB();
   }

   public function Actualizar($param, $periodo){
   $miCnx = new DB_Conexion();
   $connectDB= $miCnx->ConnectDB();

   if($connectDB->query("UPDATE proyectofinal_progra3.periodo SET periodo = '$periodo' WHERE idPeriodo= $param")){

     return true;
   }else{
     return false;
   }


   }

    }


  ?>
