<?php

class Funcionario{
    public function __construct(
        private string $nome = "",
        private float $salario = 0,
    ){}

    public function info(){
        return "Nome: $this->nome - Salário: $this->salario";
    }
};

class FolhaPagamento {
    private $funcionarios = null;

    public function __construct(){
        $this->funcionarios=[
            new Funcionario("Maria", 12000),
            new Funcionario("Fernando",9200),
            new Funcionario("Ana", 5600),
            new Funcionario("Paulo", 7200),
            new Funcionario("julia", 9000)
        ];
            
        
    }

    public function getTotalFuncionarios(){
        return count($this->funcionarios);
    }

    public function getFuncionario(){
        return $this->funcionarios[1];
    }
}

// $folhaPagamento = null;
$folhaPagamento =  new FolhaPagamento();

echo $folhaPagamento?->getTotalFuncionarios();
echo "<br>";
print_r($folhaPagamento?->getFuncionario()->info());

?>