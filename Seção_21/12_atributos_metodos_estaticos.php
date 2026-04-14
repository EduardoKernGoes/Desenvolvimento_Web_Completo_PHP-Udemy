<?php

    class Exemplo{
        public static $atributo1 = 'Atributo estatico';
        public $atributo2 = 'Atributo normal';

        public static function metodo1(){
            echo 'Método estatico';
        }

        public function metodo2(){
            echo 'Método normal';
        }
    }

    $teste = new Exemplo();

    echo Exemplo::$atributo1;
    echo '<br>';
    Exemplo::metodo1();
    
    echo '<br>';

    echo $teste->atributo2;

?>