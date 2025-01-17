<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
       //sequenciais (numéricos)

       $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

       $lista_frutas[] = 'Abacaxi';

       print_r($lista_frutas);

       echo'<hr>';
       echo '<pre>';
        var_dump($lista_frutas);
       echo '</pre>';

       echo'<hr>';
       echo $lista_frutas[2];

       echo'<hr>';
       $lista_coisas = [
        'a' => 'Banana',
        'b' => 'Maçã',
        'x' => 'Morango',
        'z' => 'Uva',
        '2' => 'Abacate' 
       ];
       echo '<pre>';
       var_dump($lista_coisas);
       echo '</pre>';

       $lista_coisas['w'] = 'Abacate';
       echo $lista_coisas['w'];
    ?>
    
    
</body>
</html>