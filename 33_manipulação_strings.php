<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $texto = "Curso completo de PHP 2.0";

            //String to lower
            echo $texto . "<br>";
            echo strtolower($texto) . "<br>";

            echo "<hr>";

            //String to upper
            echo $texto . "<br>";
            echo strtoupper($texto) . "<br>";

            echo "<hr>";

            //Uppercase first
            $texto = "curso completo de PHP 2.0";
            echo $texto . "<br>";
            echo ucfirst($texto) . "<br>";

            echo "<hr>";

            //String lenght
            $texto = "Curso completo de PHP 2.0";
            echo $texto . "<br>";
            echo strlen($texto) . "<br>";

            echo "<hr>";

            //String Replace
            echo $texto . "<br>";
            echo str_replace('PHP', 'JavaScript', $texto) . "<br>";
            echo str_replace('php', 'JavaScript', $texto) . "<br>";
            echo str_replace('.', ',', $texto) . "<br>";

            echo "<hr>";

            //Sub-string
            echo $texto . "<br>";
            echo substr($texto, 0, 5) . "<br>";
            
        ?>
        
    </body>
</html>