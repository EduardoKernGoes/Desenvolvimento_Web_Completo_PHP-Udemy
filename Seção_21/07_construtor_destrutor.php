<?php

    class Pessoa{
        public $nome;

        function __construct($nome){
            $this->nome = $nome;
            echo 'Objeto iniciado';
        }

        function __destruct(){
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Eduardo');
    echo '<br>' . $pessoa->__get('nome');
    echo '<br>' . $pessoa->correr();

    unset($pessoa);

?>