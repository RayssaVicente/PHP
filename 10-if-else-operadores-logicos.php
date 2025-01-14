<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    //operadores lógicos
    //E: && ou AND -> retorna verdadeiro se todos os resultados das expressões
    //OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados
    //XOR: XOR ->  retorna verdadeiro se umas das expressões for verdadeiro e a outra for falsa, ou vise e versa
    // ! -> inverte oo resultado da expressão

    //f e v = f
    if(5==3 && 10 > 3 ){
        echo 'Verdadeiro, <br>';
    }else{
        echo 'Falso, <br>';
    }
    //v e v = f
    if(3 == 3 && 10 > 3){
        echo 'Verdadeiro, <br>';
    }else{
        echo 'Falso,<br>';
    }
    // f e v = v
    if(3 == 4 || 10 > 3){
        echo 'Verdadeiro, <br>';
    }else{
        echo 'Falso,<br>';
    }
    // v e f = f
    if(4==4 XOR 10> 15){
        echo 'Verdadeiro, <br>';
    }else{
        echo 'Falso,<br>';
    }
    // f e f = f
    if(7 < 4 XOR 10 == 15){
        echo 'Verdadeiro, <br>';
    }else{
        echo 'Falso,<br>';
    }

    if(!(5 < 6)){
        echo 'Verdadeiro, <br>';
    }else{
        echo 'Falso,<br>';
    }

    if(22 == 22 && 3 == 3 && 5 != 5){
        echo 'Verdadeiro, <br>';
    }else{
        echo 'Falso,<br>';
    }
    // if(5 >= 15){
    //     echo 'Verdadeiro, <br>';
    // }else{
    //     echo 'Falso,<br>';
    // }

    ?>


    <br>

    
    
   
    
    
</body>
</html>