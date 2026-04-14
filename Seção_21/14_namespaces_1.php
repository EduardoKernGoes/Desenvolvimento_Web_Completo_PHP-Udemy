<?php

    namespace A;

    class Cliente implements Cadastro{
        public $nome = 'Jorge';

        public function __construct(){
            
        }
        
        public function __get($atrb){
            return $this->$atrb;
        }

        public function salvar(){
            echo 'Salvou';
        }
    }

    interface Cadastro {
        public function salvar();
    }

    namespace B;

    class Cliente implements Cadastro {
        public $nome = 'Jamilton';
        
        public function __get($atrb){
            return $this->$atrb;
        }

        public function remover(){
            echo 'Removeu';
        }
    }

    interface Cadastro {
        public function remover();
    }

    $c = new \A\Cliente();
    print_r($c);
    echo $c->__get('nome');

?>