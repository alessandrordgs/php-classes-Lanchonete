<?php

class Conta {
 public $nomeDoCliente;
 public $quantidadeDeLanche;
 public $valorTotal;

 function __construct($nomeDoCliente, $quantidadeDeLanche, $valorTotal){
   $this -> nomeDoCliente = $nomeDoCliente;
   $this -> quantidadeDeLanche = $quantidadeDeLanche;
   $this -> valorTotal = $valorTotal;
 }
}

$conta = new Conta("Alessandro", 3, 34);

echo $conta -> nomeDoCliente;
echo "<br>";
echo $conta -> quantidadeDeLanche;
echo "<br>";
echo $conta -> valorTotal." reais";

?>