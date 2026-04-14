<?php

    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){
            echo 'Abriu a porta';
        }

        public function ligar(){
            echo 'Ligou';
        }

        public function desligar(){
            echo 'Desligou';
        }
    }

    class TV implements EquipamentoEletronicoInterface{
        public function trocarCanal(){
            echo 'Trocou o canal';
        }

        public function ligar(){
            echo 'Ligou';
        }

        public function desligar(){
            echo 'Desligou';
        }
    }

    $g = new Geladeira();
    $t = new TV();

    //----------------------------------------------------------

    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface AquaticoInterface{
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function andar(){
            echo 'Andou';
        }

        public function respirar(){
            echo 'Respirou';
        }

        public function conversar(){
            echo 'Conversou';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function nadar(){
            echo 'Nadou';
        }

        public function respirar(){
            echo 'Respirou';
        }

        public function esguichar(){
            echo 'Esguichou';
        }
    }

    
    //----------------------------------------------------------

    interface AnimalInterface{
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function voar(){
            echo 'Voou';
        }

        public function comer(){
            echo 'Comeu';
        }
    }

?>