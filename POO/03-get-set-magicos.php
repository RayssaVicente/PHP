<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Com POO</title>
</head>
<body>
    <?php
    
       class Funcionario{
        //atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;
            public $cargo = null;
            public $salario = null;

            function __set($atributo, $valor){
                $this->$atributo;
            }

            function __get($atributo){
                return $this->$atributo;
            }

            function setNome ($nome){
                $this->nome = $nome;
            }

            function setNumFilhos($numFilhos){
                $this->numFilhos = $numFilhos;
            }

            function getNome(){
                return $this->nome;
            }

            function getNumFilhos(){
                return $this->numFilhos;
            }

            //Metodos
            function resumirCardFunc(){
                return "$this->nome possui $this->numFilhos filhos(s)";
            }

            function modificarNumFilhos($numFilhos){
                $this->numFilhos = $numFilhos;
            }

            
       }

       $y = new Funcionario();
       $y->setNome(' José ');
       $y->setNumFilhos(2);
       echo $y->getNome().  'possui '. $y->getNumFilhos(). ' filhos(s) ';
    


     
     ?>
    
    
</body>
</html>