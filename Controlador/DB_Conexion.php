<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<?php

class DB_Conexion
{
		private	$host= "localhost";
		private	$user= "root";
		private	$pass= "";
		private	$db= "proyectofinal-progra3";
		private $conexion;

		function ConectarDb()
		{
			$conexion = new mysqli($this-> host,$this-> user,$this-> pass,$this-> db);
			if(mysqli_connect_errno())
			{
				echo "Error al conectar a la base de datos", mysqli_connect_error();
			}else
			{
				//echo("Conexion exitosa");
				return $conexion;

			}
		}

		function DesconectarDb()
		{
			$conexion->close();
		}
}
 ?>
