<?php
 class Funcionario {
   public $nome;
   public $salario;

 function __construct($nome, $salario){
  $this->nome = $nome;
  $this->salario = $salario;
 }
}


class gerente extends Funcionario {
 public function __construct($nome, $salario){
    $this->nome = $nome;
    $this->salario = $salario;
  }
}

$gerente = new gerente("Alessandro", 3500);
echo $gerente->nome;
echo "<br/>";
echo $gerente->salario;
echo "<br/>";

echo "<br/>";
echo "<br/>";

$chapeiro = new Funcionario("George", 1100);
echo $chapeiro->nome;
echo "<br/>";
echo $chapeiro->salario;
echo "<br/>";



 
?>