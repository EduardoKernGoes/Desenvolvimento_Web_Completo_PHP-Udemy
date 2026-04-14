<?php

    namespace B;

    class Cliente implements Cadastro {
        public $nome = 'Jamilton';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        
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

?>