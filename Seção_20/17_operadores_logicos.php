<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            //Operador 'E' (AND ou &&), todas tem que ser verdadeiras para retornar verdadeiro
            if( 5 == 3 && 5 > 3 ) {
                echo "Verdadeiro";
            } else {
                echo "Falso";
            }

            echo "<br>";

            //Operador 'OU' (OR ou ||), uma condição tem que ser verdadeira para retornar verdadeiro
            if( 5 == 3 || 5 > 3 ) {
                echo "Verdadeiro";
            } else {
                echo "Falso";
            }

            echo "<br>";

            //Operador 'XOR' (XOR), somente ume condição pode ser verdadeira para retornar verdadeiro
            if( 5 == 5 XOR 5 > 3 ) {
                echo "Verdadeiro";
            } else {
                echo "Falso";
            }

            echo "<br>";

            //Operador 'Negação' (!), retorna o inverso do resultado da expressão
            if( !(5 == 5) ) {
                echo "Verdadeiro";
            } else {
                echo "Falso";
            }

            echo "<br>";
            
        ?>
        
    </body>
</html>