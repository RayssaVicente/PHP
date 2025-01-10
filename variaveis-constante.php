<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        define('BD_URL','endereco_bd_dev');

        define('BD_USUARIO', 'usuario_dev');

        define('BD_SENHA', 'senha_dev');

        //Essas são variveis constantes de é não podem ser alteradas ou sobreposto
        echo BD_URL . '<br>';
        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';
    ?>
    <br>
   
    
    
</body>
</html>