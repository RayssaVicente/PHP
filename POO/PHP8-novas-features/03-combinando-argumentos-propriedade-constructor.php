<?php

class Produto {
    public function __construct(public string $nome = "", public float $valor = 0){

    }
}


$produto = new Produto(valor: 1500, nome: 'Smartphone');

echo "Produto: ".$produto->nome;
echo "<br>";
echo "Valor: ".$produto->valor;


?>