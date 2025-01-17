<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
      $lista_coisas = [];

      $lista_coisas['frutas'] = [1 =>  'Banana', 2 => 'Maçã', 3 => 'Morango', 4=> 'Uva'];
      $lista_coisas['pessoas'] = ['Maria', 'Ana', 'João'];
      echo '<pre>';
      print_r($lista_coisas);
      echo '</pre>';

      echo '<hr>';
      echo $lista_coisas['frutas'][4];
      echo $lista_coisas['pessoas'][2];
     ?>
    
    
</body>
</html>