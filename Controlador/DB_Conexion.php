<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<<?php
/**
 *
 */
class DB_Conexion {

private $host = "localhost";
private $user = "root";
private $pass = "";
private $db = "proyectofinal_progra3";
private $conexion;

function ConnectDB(){
$this -> conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);

if (mysqli_connect_errno()){
echo "Error al conectar a la base de datos ", mysqli_connect_error();
}else{
  return $this->conexion;
}
}
function DisconnectDB(){
  $this->conexion->close();
}
}
 ?>
