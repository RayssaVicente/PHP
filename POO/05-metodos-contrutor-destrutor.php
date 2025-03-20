<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Com POO</title>
</head>
<body>
    <?php
    
       class Pessoa{
        //atributos
           public $nome = null;

        //metodos

           function __construct($nome){
            echo 'Objeto iniciado';
            $this->nome = $nome;
           }

           function __descruct(){
            echo 'Objeto removido';
           }

           function __get($atributo){
            return $this->$atributo;
           }

           function correr(){
             return $this->__get('nome') . 'está correndo';
           }

            
       }

       $pessoa = new Pessoa('Jorge');
       echo '<br/ >Nome: '. $pessoa->__get('nome');
       echo '<br/>'. $pessoa->correr();
    
       unset($pessoa);


     
     ?>
    
    
</body>
</html>