<?php

    class FolhaPagamento{
        public function getTotalFuncionarios(){
            return 25;
        }
    }

    $folhaPagamento = new FolhaPagamento();

    echo $folhaPagamento->getTotalFuncionarios();

    $folhaPagamento2 = null;
    
    //Irá dar um erro pois folhaPagamento2 é null
    //echo $folhaPagamento2->getTotalFuncionarios();
    
    //Evita o erro do null, meio que efetua um if, verificando se o valor do folhaPagamento2 e null ou não
    echo $folhaPagamento2?->getTotalFuncionarios();

?>