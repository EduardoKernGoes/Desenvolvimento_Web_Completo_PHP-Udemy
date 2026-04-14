<?php

    class Veiculo{
        public $placa;
        public $cor;

        function acelerar(){
            echo 'Acelerou';
        }

        function freiar(){
            echo 'Freiou';
        }

        function trocarMarcha(){
            echo 'Desengatar a marcha com o pé e trocar com a mão';
        }
    }

    class Carro extends Veiculo{
        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abriu o teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterou a posição do volante';
        }

    }

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinou';
        }

        function trocarMarcha(){
            echo 'Desengatar a marcha com a mão e trocar com o pé';
        }

    }

    $carro1 = new Carro('abc1234', 'Branco');
    $moto1 = new Moto('def5678', 'Vermelho');

    $carro1->trocarMarcha();
    echo '<br>';
    $moto1->trocarMarcha();
    
?>