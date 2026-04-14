<?php

    class Funcionario{
        public $nome;
        public $telefone;
        public $numFilhos;
        public $cargo;
        public $salario;

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        /*
        function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }
        */

        function resumirCadFunc(){
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s)';
            //return "$this->nome possui $this->numFilhos filho(s)";
        }
    }

    $eduardo = new Funcionario();
    $eduardo->__set('nome', 'Eduardo');
    $eduardo->__set('telefone', '51 99300 7948');
    $eduardo->__set('numFilhos', 0);

    echo $eduardo->resumirCadFunc();

    /*
    $eduardo = new Funcionario();
    $eduardo->setNome('Eduardo');
    $eduardo->setTelefone('51 99300 7948');
    $eduardo->setNumFilhos(0);

    echo $eduardo->resumirCadFunc();
    */

?>