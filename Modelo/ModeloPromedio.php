<?php
class ModeloPromedio{

  //--------------------------------------------------------
  //VARIABLES
  //-------------------------------------------------------
     private $idPromedio;
     private $estudiante;
     private $apellidos;
     private $materia;
     private $periodo;
     private $calificacion;

     //--------------------------------------------------------
     //GETTER
     //-------------------------------------------------------
     function getIdPromedio() {
         return $this->idPromedio;
     }

     function getEstudiante() {
         return $this->estudiante;
     }

     function getApellidos() {
         return $this->apellidos;
     }

     function getMateria() {
         return $this->materia;
     }

     function getPeriodo() {
         return $this->periodo;
     }

     function getCalificacion() {
         return $this->calificacion;
     }

     //--------------------------------------------------------
     //SETTER
     //-------------------------------------------------------
     function setIdPromedio($idPromedio): void {
         $this->idPromedio = $idPromedio;
     }

     function setEstudiante($estudiante): void {
         $this->estudiante = $estudiante;
     }

     function setApellidos($apellidos): void {
         $this->apellidos = $apellidos;
     }

     function setMateria($materia): void {
         $this->materia = $materia;
     }

     function setPeriodo($periodo): void {
         $this->periodo = $periodo;
     }

     function setCalificacion($calificacion): void {
         $this->calificacion = $calificacion;
     }

}

 ?>
