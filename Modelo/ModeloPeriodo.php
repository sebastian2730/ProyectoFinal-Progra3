<!-- CURSO:Programacion3
     PROFESOR:Noé Otoniel Nájera Morales
     AUTORES: Sebastian Morales Barboza
              Lureth Zuñiga Fonseca
              Mónica Vega Garbanzo
-->
<?php
class ModeloPeriodo{

  //--------------------------------------------------------
  //VARIABLES
  //-------------------------------------------------------
    private $idPeriodo;
    private $periodo;

    //--------------------------------------------------------
    //GETTER
    //-------------------------------------------------------
    function getIdPeriodo() {
        return $this->idPeriodo;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    //--------------------------------------------------------
    //SETTER
    //-------------------------------------------------------
    function setIdPeriodo($idPeriodo){
        $this->idPeriodo = $idPeriodo;
    }

    function setPeriodo($periodo){
        $this->periodo = $periodo;
    }

}

 ?>
