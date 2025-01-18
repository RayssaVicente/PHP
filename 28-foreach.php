<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    
    $itens = array('sofa', 'mesa', 'cama', 'geladeira', 'fogão');

    echo '<pre>';
    
    print_r($itens);
    
    echo'</pre>';
    
    foreach ($itens as $item) {
        echo"$item <br>";
    
        if($item == 'mesa'){
        
        echo'(comprei uma mesa)';

        };
    }
    
        
    
     
     ?>
    
    
</body>
</html>