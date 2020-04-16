<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<?php
  include "DB_Conexion.php";

class ControladorLogin{


  function ingreso($user,$contrasena){

   $miCnx= new DB_Conexion();
   $resultSet;

   $resultSet = $miCnx-> ConectarDb();
   $datos=$resultSet->query("SELECT * FROM usuarios WHERE email='$user'AND clave='$contrasena'");
   //$rows = $datos-> fetch_all(MYSQLI_ASSOC);


var_dump($resultSet);
   if($datos == false){
     return "error";
   }else{
     return "succes";
   }

 $miCnx->DesconectarDb();


  }


}
 ?>
