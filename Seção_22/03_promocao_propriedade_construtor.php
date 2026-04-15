<?php

    /*Maneira padrão
    class Produto {
        public $nome = '';
        public $valor = 0;

        public function __construct($nome, $valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }
    */

    //Promoção de propriedade (PHP8)
    class Produto {
        public function __construct(
            public $nome = '',
            public $valor = 0
        ){}
    }

    $produto = new produto('Telefone', 1500);

    echo "Produto: $produto->nome<br>Valor: $produto->valor";

?>