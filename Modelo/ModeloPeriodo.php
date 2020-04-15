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
    function setIdPeriodo($idPeriodo): void {
        $this->idPeriodo = $idPeriodo;
    }

    function setPeriodo($periodo): void {
        $this->periodo = $periodo;
    }

}

 ?>
