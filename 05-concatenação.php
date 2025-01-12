<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    $nome = 'Maria';
    $cor = 'amarelo';
    $idade = 25;
    $atividae_favorita = 'andar de bicicleta';

    // operador para conncatenação é o ponto . 

    echo 'Olá '. $nome .', vi que sua cor  favorita e '. $cor . ', estou vendo também que você possui ' .$idade. ' anos e que gosta de ' . $atividae_favorita;

    echo '<br>';

    //As asplas duplas permite fazer também concatenação
    echo "Olá  $nome, vi que sua cor  favorita e $cor , estou vendo também que você possui  $idade anos e que gosta de $atividae_favorita"

   
    

    ?>


    <br>

    
    
   
    
    
</body>
</html>