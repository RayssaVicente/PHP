<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Com POO</title>
</head>
<body>
    <?php
    
       class Carro extends Veiculo{

        public $teto_solar = true;

        function abrirTetoSolar(){
          echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
          echo 'Alterar posição volante';
        }

       }

       class Moto extends Veiculo{
        public $contraPesoGuido = true;

        function empinar(){
          echo 'Empinar';
        }
      }

      class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
          echo 'Acelerar';
        }
      }


      $carro = new Carro('ABC1234', 'Branco');
      $moto = new Moto('DEF1122', 'Preto');

      echo '<pre>';
      print_r($carro);
      echo '<br>';
      print_r($moto);
      echo'</pre>';

      $carro->abrirTetoSolar();
      echo '<br>';
      $carro->acelerar();


     
     ?>
    
    
</body>
</html>