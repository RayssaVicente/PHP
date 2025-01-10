<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    //string
        $nome = 'Jorge Sant Ana';
    //int
        $idade = 25;
    // float
        $peso = 82.5;
    //boolean (1= true) , (vazio = false)
        $fumante = true;

    ?>
    <br>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante: <?= $fumante?></p>
    
   
    
    
</body>
</html>