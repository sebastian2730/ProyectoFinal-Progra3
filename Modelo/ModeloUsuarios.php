<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<?php
class ModeloUsuarios{

  //--------------------------------------------------------
  //VARIABLES
  //-------------------------------------------------------
    private $idUsuario;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $direccion;
    private $perfilSistema;
    private $email;
    private $clave;

    //--------------------------------------------------------
    //GETTER
    //-------------------------------------------------------
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getPerfilSistema() {
        return $this->perfilSistema;
    }

    function getEmail() {
        return $this->email;
    }

    function getClave() {
        return $this->clave;
    }

    //--------------------------------------------------------
    //SETTER
    //-------------------------------------------------------
    function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    function setPerfilSistema($perfilSistema): void {
        $this->perfilSistema = $perfilSistema;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setClave($clave): void {
        $this->clave = $clave;
    }
}

 ?>
