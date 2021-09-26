<?php


class Delivery{
  public $bairro;
  public $taxaPorBairro;
  public $taxaBase = 2;
  
  function __construct($bairro, $taxaPorBairro){
    $this -> bairro = $bairro;
    $this -> taxaPorBairro = $taxaPorBairro;
  }

  function total($taxaPorBairro){
    return $taxaPorBairro + 2;
  }
}

$entrega = new Delivery("Santa Ines", 5);
echo $entrega -> bairro;
echo "<br>";
echo $entrega -> total($entrega -> taxaPorBairro);
echo "<br>";


?>