<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            //Ao fazer casting do formato float ou double para inteiro a parte decimal do número é perdida, ou seja, o número é arredondado para baixo.
            $number = 2;
            $numberToString = (string) $number;
            $numberToFloat = (float) $number;
            $numberToDouble = (double) $number;

            echo $number . ' no formato ' . gettype($number);
            echo "<br>";
            echo $numberToString . ' no formato ' . gettype($numberToString);
            echo "<br>";
            echo $numberToFloat . ' no formato ' . gettype($numberToFloat);
            echo "<br>";
            echo $numberToDouble . ' no formato ' . gettype($numberToDouble);
            echo "<br>";

            $string = '2';
            $stringToInteger = (integer) $string;
            $stringToFloat = (float) $string;
            $stringToDouble = (double) $string;
            $stringToBoolean = (boolean) $string;

            echo "<br>";
            echo $string . ' no formato ' . gettype($string);
            echo "<br>";
            echo $stringToInteger . ' no formato ' . gettype($stringToInteger);
            echo "<br>";
            echo $stringToFloat . ' no formato ' . gettype($stringToFloat);
            echo "<br>";
            echo $stringToDouble . ' no formato ' . gettype($stringToDouble);
            echo "<br>";
            echo $stringToBoolean . ' no formato ' . gettype($stringToBoolean);
            echo "<br>";
        ?>
        
    </body>
</html>