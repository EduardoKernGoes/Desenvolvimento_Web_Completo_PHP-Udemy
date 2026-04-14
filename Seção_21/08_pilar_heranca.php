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

    }

    $carro1 = new Carro('abc1234', 'Branco');
    $moto1 = new Moto('def5678', 'Vermelho');

    echo '<pre>';
        print_r($carro1);
    echo '</pre>';

    
    echo '<pre>';
        print_r($moto1);
    echo '</pre>';
    
    $carro1->abrirTetoSolar();
    echo '<br>';
    $carro1->acelerar();
    echo '<br>';
    $carro1->freiar();

    echo '<hr>';

    $moto1->empinar();
    echo '<br>';
    $moto1->acelerar();
    echo '<br>';
    $carro1->freiar();
?>