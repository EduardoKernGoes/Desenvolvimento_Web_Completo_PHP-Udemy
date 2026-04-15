<?php

    //Erros comuns
    try{
        echo '<h3> --- Try --- </h3>';

        $sql = 'select * from clients';
        //mysql_query($sql);

        if(!file_exists('require_arquivo_a.php')){
            throw new Error('o arquivo não existe');
        }

    }catch (Error $e){
        echo '<h3> --- Catch Error --- </h3>';
        echo $e;
    }catch (Exception $e){
        echo '<h3> --- Catch Exception --- </h3>';
        echo $e;
    }finally{
        echo '<h3> --- Finally --- </h3>';
    }

    echo '<hr>';

    //Erros customizados

    class ExceptionCustomizada extends Exception{
        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagem(){
            return $this->erro;
        }
    }

    try{
        
        throw new ExceptionCustomizada('Esse é um erro de teste');

    }catch (ExceptionCustomizada $e){
        echo $e->exibirMensagem();
    }
?>