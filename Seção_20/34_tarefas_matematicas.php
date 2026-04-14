<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $num = 7.3;

            echo "O número $num arredondado para cima é " . ceil($num) . " e arredondado para baixo é " . floor($num) . ".<br> Porém, arredondado para o inteiro mais próximo é " . round($num) . ".<br>";
            echo "Esse é o valor máximo do computador: " . getrandmax() . ".<br>";
            echo "Esse é um número aleatório: " . rand() . ".<br>";
            echo "Esse é um número aleatório entre 1 e 100: " . rand(1, 100) . ".<br>";
            echo "Essa é a raiz quadrada de 16: " . sqrt(16) . ".<br>";
        ?>
        
    </body>
</html>