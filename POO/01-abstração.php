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
            public $nome = 'Jóse';
            public $telefone = '83 988677 754322';
            public $numFilhos = 2;


            //Metodos
            function resumirCardFunc(){
                return "$this->nome possui $this->numFilhos filhos(s)";
            }

            function modificarNumFilhos($numFilhos){
                $this->numFilhos = $numFilhos;
            }
       }

       $y = new Funcionario();
       echo $y->resumirCardFunc();
       echo '<br/>';
       $y->modificarNumFilhos(3);
       echo $y->resumirCardFunc();
       echo '<hr/>';
    


     
     ?>
    
    
</body>
</html>