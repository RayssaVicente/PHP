<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
       $texto = 'curso completo de PHP';

       //string to lower
       echo $texto . '<br>';
       echo strtolower($texto);

        echo '<hr>';
       //string to upper
       echo $texto . '<br>';
       echo strtoupper($texto);

       echo '<hr>';
       //upper case first
       echo $texto . '<br>';
       echo ucfirst($texto);

       echo '<hr>';
       //string lenght
       echo $texto . '<br>';
       echo strlen($texto);

       echo '<hr>';
       //string to upper
       echo $texto . '<br>';
       echo str_replace('PHP', 'Javascript', $texto);

       echo '<hr>';
       //string to upper
       echo $texto . '<br>';
       echo substr($texto, 0 , 5);

    ?>
    
    
</body>
</html>