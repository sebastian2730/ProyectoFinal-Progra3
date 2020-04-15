<?php
class ModeloEstudiantes{

  //--------------------------------------------------------
  //VARIABLES
  //-------------------------------------------------------
      private $idEstudiante;
      private $encargado;
      private $nombre;
      private $apellidos;
      private $seccion;

      //--------------------------------------------------------
      //GETTER
      //-------------------------------------------------------
      function getIdEstudiante() {
          return $this->idEstudiante;
      }

      function getEncargado() {
          return $this->encargado;
      }

      function getNombre() {
          return $this->nombre;
      }

      function getApellidos() {
          return $this->apellidos;
      }

      function getSeccion() {
          return $this->seccion;
      }
      
      //--------------------------------------------------------
      //SETTER
      //-------------------------------------------------------
      function setIdEstudiante($idEstudiante): void {
          $this->idEstudiante = $idEstudiante;
      }

      function setEncargado($encargado): void {
          $this->encargado = $encargado;
      }

      function setNombre($nombre): void {
          $this->nombre = $nombre;
      }

      function setApellidos($apellidos): void {
          $this->apellidos = $apellidos;
      }

      function setSeccion($seccion): void {
          $this->seccion = $seccion;
      }

}

 ?>
