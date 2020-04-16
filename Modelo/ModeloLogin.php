<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<?php
class ModeloLogin{

  //--------------------------------------------------------
  //VARIABLES
  //-------------------------------------------------------
    private $usuario;
    private $contrasena;

    //--------------------------------------------------------
    //GETTER
    //-------------------------------------------------------
    function getUsuario() {
        return $this->usuario;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    //--------------------------------------------------------
    //SETTER
    //-------------------------------------------------------
    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

}
