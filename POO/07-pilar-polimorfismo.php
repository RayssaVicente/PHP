<?php

    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuido = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // Sobrescrevendo o método trocarMarcha para motos
        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Caminhao extends Veiculo {}

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preto');
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br/>';
    $moto->trocarMarcha();
    echo '<br>';



?>