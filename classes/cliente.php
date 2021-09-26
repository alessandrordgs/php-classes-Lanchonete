<?php

class Cliente{
  public $nome;
  public $mesa;

  function __construct($nome, $mesa){
     $this -> nome = $nome;
     $this -> mesa = $mesa;
  }
}

$cliente = new Cliente("Alessandro",2);
echo $cliente -> nome;
echo "<br>";
echo $cliente ->mesa." é o numero da mesa do cliente"

?>