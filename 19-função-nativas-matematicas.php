<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
       $num = 7.3;
       echo ceil($num). '<br>';//arredonda para cima

       $num2 = 8.3;
       echo floor($num). '<br>'; //arredonda para baixo

       echo round($num2). '<br>'; //arredonda de a cordo com a fração

       echo rand(). '<br>'; //gera um valor aleatorio 0 até o randmax

       echo rand(10, 20). '<br>';

       echo sqrt(9);//calcula a raiz

    ?>
    
    
</body>
</html>