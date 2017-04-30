<?php
  require_once("./calculadora.php");

  class calculadoraAvanzada extends calculadora {
    private $c = 0;

    function __construct($c){
      $this->c = $c;
    }

    function potencia($exp){
      return pow($this->c,$exp);
    }

    function raizCuadrada(){
      return sqrt($this->c);
    }

    function exponencial(){
      return exp($this->c);
    }
  }
?>
