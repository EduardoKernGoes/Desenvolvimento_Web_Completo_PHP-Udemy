<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            //$listaFrutas = ['Banana', 'Maça', 'Morango', 'Uva'];
            $listaFrutas = array('Banana', 'Maça', 'Morango', 'Uva');

            $listaFrutas[] = 'Abacaxi';
            $listaFrutas[0] = 'Laranja';

            echo '<pre>';
            var_dump($listaFrutas);
            echo '<pre>';

            echo "<hr>";

            echo '<pre>';
            print_r($listaFrutas);
            echo '<pre>';

            echo "<hr>";

            echo $listaFrutas[2] . "<br>";

            echo "<hr>";
            
            $listaFrutas2 = array('a' => 'Banana', 'b' => 'Maça', 'c' => 'Morango', 'd' => 'Uva');

            $listaFrutas2['e'] = 'Abacaxi';

            echo '<pre>';
            var_dump($listaFrutas2);
            echo '<pre>';

            echo "<hr>";

            echo '<pre>';
            print_r($listaFrutas2);
            echo '<pre>';

            echo "<hr>";

            echo $listaFrutas2['a'] . "<br>";

            echo "<hr>";
            
        ?>
    </body>
</html>