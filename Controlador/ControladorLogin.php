<?php
class ControladorLogin{

  function ingreso($user,$contrasena){

   $miCnx= new DB_Conexion();
   $conexion = $micn-> ConectarDb();

   $result=$conexion->query("SELECT * FROM usuarios WHERE idUsuario='.$user' and clave = '.$contrasena'");
   $rows=$result-> fetch_all(MYSQLI_ASSOC);

   if(empty(rows)){
     return false;
   }else{
     return true;
   }

 $miCnx->DesconectarDb();


  }




}
 ?>
