<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
        function exibirBoasVindas(){
            echo "Seja Bem vindo ao curso de PHP";
        }

        exibirBoasVindas();

        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;

        }

        $resultado = calcularAreaTerreno(5,5);
        echo $resultado;

    ?>
    
    
</body>
</html>