<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
    $funcionarios = array('João', 'Maria', 'Júlia');

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    foreach($funcionarios as $idx => $nome_funcionarios){
        echo"ID $idx - Nome: $nome_funcionarios <br>";
    }
    
    $funcionarios2 = array(
        array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => '06/03/1970'),
        array('nome' => 'Maria', 'salario' => 3000),
        array('nome' => 'Júlia', 'salario' => 2200)
    );

    echo '<pre>';
    print_r($funcionarios2);
    echo '</pre>';

    foreach($funcionarios2 as $ids => $funcionario){
        // print_r($funcionario);

        foreach($funcionario as $ids2 => $valor){
            echo "$ids2 - $valor <br>";
        }
        echo "<hr>";
    }
    
     
     ?>
    
    
</body>
</html>