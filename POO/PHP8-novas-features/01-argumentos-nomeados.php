<?php

    function sendEmail($destinatario = "", $cc = "", $assunto = "", $mensagem = ""){
        echo "Destinatários:".$destinatario."<br>";
        echo "CC:".$cc."<br>";
        echo "Assunto:".$assunto."<br>";
        echo "Mensagem:".$mensagem."<br>";
    }

    

    sendEmail(
        destinatario: "jorge@argusto-academt.com",
        assunto: "Argumentos Nomeados",
        mensagem: "Dominanado a feature do PHP8"
    );

    echo "<hr>";

    /* convencional -> respeitando a ordem doa parâmetros*/
    sendEmail(
        "jorge@argusto-academt.com",
        "teste@teste.com",
        "Argumentos Nomeados",
        "Dominanado a feature do PHP8"
    );

    echo "<hr>";

    sendEmail(
        "jorge@argusto-academt.com",
        "Argumentos Nomeados",
        "Dominanado a feature do PHP8"
    );

?>