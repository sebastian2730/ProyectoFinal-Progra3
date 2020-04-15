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
