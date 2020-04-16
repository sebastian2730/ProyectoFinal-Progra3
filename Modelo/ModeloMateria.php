<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<?php
class ModeloMateria{

     //--------------------------------------------------------
     //VARIABLES
     //-------------------------------------------------------
     private $idMateria;
     private $profesor;
     private $materia;

     //--------------------------------------------------------
     //GETTER
     //-------------------------------------------------------
     function getIdMateria() {
         return $this->idMateria;
     }

     function getProfesor() {
         return $this->profesor;
     }

     function getMateria() {
         return $this->materia;
     }

     //--------------------------------------------------------
     //SETTER
     //-------------------------------------------------------
     function setIdMateria($idMateria): void {
         $this->idMateria = $idMateria;
     }

     function setProfesor($profesor): void {
         $this->profesor = $profesor;
     }

     function setMateria($materia): void {
         $this->materia = $materia;
     }

}

 ?>
