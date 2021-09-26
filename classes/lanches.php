<?php

class Lanche {
  public $nomeDoLanche;
  public $valor;
  
  public function __construct($nomeDoLanche, $valor){
    $this -> nomeDoLanche = $nomeDoLanche;
    $this -> valor = $valor;
  }
}

$hamburguer = new Lanche("Hamburguer com bacon", 13);
echo $hamburguer -> nomeDoLanche;
echo "<br>";
echo $hamburguer -> valor;
?>