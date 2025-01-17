<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
      //in_array() - true ou false para existencia do que está sendo procurado
      //array_search() - retorna o índice do valor pesquisado, caso ele existir 

      $lista_frutas = ['Banana', 'Maçã', 'Uva'];

      echo '<pre>';
      print_r($lista_frutas);
      echo '</pre>';

      echo in_array('Maçã', $lista_frutas);
      //true -> texo 1
      // false -> texto = vazio
      echo in_array('Abacate', $lista_frutas);
      echo '<hr>';

      echo array_search('Uva', $lista_frutas);
      // false -> texto = vazio
      //true ->  index do valor

      $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
      ];

      echo '<pre>';
      print_r($lista_frutas);
      echo '</pre>';

      echo in_array('João', $lista_coisas)
     ?>
    
    
</body>
</html>