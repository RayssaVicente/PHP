<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
    //   $array = ['String'];
    //   $retorno = is_array($array);

    //   if ($retorno){
    //     echo "Sim, é um array";
    //   }else{
    //     echo "Não, não é um array";
    //   }

      $array2 = [1=> 'a', 7 => 'b', 18 => 'c'];
      echo '<pre>';
        print_r($array2);
      echo '</pre>';

      $chaves_array = array_keys($array2);
      echo '<pre>';
        print_r($chaves_array);
      echo '</pre>'; // retorna como valor as chaves dos arrays

      $array3 = ['Teclado', 'Notebook', 'Mouse', 'Cabo HDMI', 'Gabinete'];
      echo '<pre>';
        print_r($array3);
      echo '</pre>';

      sort($array3);
      echo '<pre>';
        print_r($array3);
      echo '</pre>'; // retorna true ou false, para ordenação do array


      $array4 = ['Teclado', 'Notebook', 'Mouse', 'Cabo HDMI', 'Gabinete'];
      echo '<pre>';
        print_r($array4);
      echo '</pre>';

      asort($array4);
      echo '<pre>';
        print_r($array4);
      echo '</pre>'; // retorna true ou false, para ordenação do array é mantem o index e valor

      

      $array5 = ['Teclado', 'Notebook', 'Mouse', 'Cabo HDMI', 'Gabinete'];
      echo '<pre>';
        print_r($array5);
        echo '<br>';
        echo count($array5);
      echo '</pre>'; // conta a quantidade de elemntos do array


      $novo_array = array_merge($array2, $array5);// Junta os valores dos arrays em um único array
      echo '<pre>';
        print_r($novo_array);
      echo '</pre>';

      $string = '26/04/2018';
      $array_retorno = explode('/', $string);// sepra os valores de uma string atráves de um delimitador
      echo '<pre>';
        echo $string;
        print_r($array_retorno);
      echo '</pre>';

      $arrays = ['a', 'b', 'x', 'y'];
      $string_retorno2 = implode(',', $arrays);//junta elementos de um array e retorna uma string, atráves de um delimitador
      echo $string_retorno2;

      




      

      
     ?>
    
    
</body>
</html>