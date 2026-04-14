<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $array = ['String'];
            $retorno = is_array($array);

            if($retorno){
                echo 'É um array';
            } else {
                echo 'Não é um array';
            }

            echo '<hr>';

            $array2 = [1 => 'a', 7 => 'b', 18 => 'c'];

            echo '<pre>';
            print_r($array2);
            echo '</pre>';

            echo '<br>';

            $chaves_array = array_keys($array2);

            echo '<pre>';
            print_r($chaves_array);
            echo '</pre>';

            echo '<hr>';

            $array3 = ['Integer', 'String', 'Float', 'Double', 'Boolean'];

            echo '<pre>';
            print_r($array3);
            echo '</pre>';

            sort($array3);
            echo '<br>';

            echo '<pre>';
            print_r($array3);
            echo '</pre>';

            echo '<hr>';

            $array4 = ['Integer', 'String', 'Float', 'Double', 'Boolean'];

            echo '<pre>';
            print_r($array4);
            echo '</pre>';

            asort($array4);
            echo '<br>';

            echo '<pre>';
            print_r($array4);
            echo '</pre>';

            echo '<hr>';

            $array5 = ['Integer', 'String', 'Float', 'Double', 'Boolean'];

            echo '<pre>';
            print_r($array5);
            echo count($array5);
            echo '</pre>';

            echo '<hr>';

            $array6 = ['Integer', 'String', 'Float', 'Double', 'Boolean'];
            $array7 = ['Batata', 'Cenoura', 'Tomate'];
            $array8 = ['Notebook', 'Celular', 'Computador', 'Monitor'];
            $array9 = ['Pera', 'Maça'];

            $array_itens = array_merge($array6, $array7, $array8, $array9);

            echo '<pre>';
                print_r($array_itens);
            echo '</pre>';

            echo '<hr>';

            $string = '26/07/2005';
            $array_data = explode('/', $string);
            $string_retorno = implode('-', $array_data);

            echo '<pre>';
                echo $string;
                echo '<br>';
                print_r($array_data);
                echo $string_retorno;
            echo '</pre>';
        ?>
    </body>
</html>