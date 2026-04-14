<?php

    class Funcionario{
        public $nome = 'Eduardo';
        public $telefone = '51 99300-7948';
        public $numFilhos = 0;

        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
    }

    $Eduardo = new Funcionario();

    echo $Eduardo->resumirCadFunc();

    $Eduardo->modificarNumFilhos(1);

    echo $Eduardo->resumirCadFunc();

?>