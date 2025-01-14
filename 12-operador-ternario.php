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

        $valor_frete_aux = $usuario_possui_cartão_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartão_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartão_loja && $valor_compra >= 100 ? 25 : $valor_frete))

        

        

    ?>


    <h1>Detalhe do pedido</h1>

    <p>Possui cartão da loja? <?=  $usuario_possui_cartão_loja ? "SiM"
        : "NÃO";?> </p>
    <?php
        //operado ternario
        //<condição ? true : false
        // condição ? é para separa a condição das possibilidades, a direita condição que será feita se for verdadeira  : a esquerda a condição que sera executada se for falso

       
    ?>

    <p>Valor da compra:  <?= $valor_compra?></p>

     <p>Recebeu desconto no frete? </p>
    <?php
        // if($recebeu_desconto_frete == true){
        //     echo 'SIM';
        // }else{
        //     echo 'NÃO';
        // }
        $teste = $recebeu_desconto_frete ? "SIM": "NÂO";

        echo $teste
    
    ?>
   
   <p>Valor do frete:  <?= $valor_frete?></p>

    
</body>
</html>