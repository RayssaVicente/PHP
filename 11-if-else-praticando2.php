<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $usuario_possui_cartão_loja = true;
        $valor_compra = 100;
        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if($usuario_possui_cartão_loja  && $valor_compra >= 400){
            $valor_frete = 0;
           
        }else if($usuario_possui_cartão_loja && $valor_compra >= 300){
            $valor_frete = 10;
           
        }else if($usuario_possui_cartão_loja && $valor_compra >= 100){
            $valor_frete = 25;
           
        }else{
            $recebeu_desconto_frete = false
        }

        

    ?>


    <h1>Detalhe do pedido</h1>

    <p>Possui cartão da loja? </p>
    <?php
        if($usuario_possui_cartão_loja == true){
            echo 'SIM';
        }else{
            echo 'NÃO';
        }
    
    ?>

    <p>Valor da compra:  <?= $valor_compra?></p>

     <p>Recebeu desconto no frete? </p>
    <?php
        if($recebeu_desconto_frete == true){
            echo 'SIM';
        }else{
            echo 'NÃO';
        }
    
    ?>
   
   <p>Valor do frete:  <?= $valor_frete?></p>

    
</body>
</html>