<?php

    namespace A;

    class Cliente implements Cadastro{
        public $nome = 'Jorge';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
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

?>