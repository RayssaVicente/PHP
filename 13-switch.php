<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php
    $parametro = 2;
        switch($parametro){
            case 1:
                echo 'Entrou no case 1';
                break;
            case 2:
                echo 'Entrou no case 2';
                break;
            case 3:
                echo 'Entrou no case 3';
                break; //limita a execução do código somente para o case que se incaixar no parametro passado 
            default:
                echo "Opção invalida";
                break;
        }
    
    ?>
    
</body>
</html>