<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            function exibirBoasVindas(){
                echo "Boas vindas ao meu código de treinamento em PHP";
            }

            function calculaAreaTerreno($altura, $comprimento){
                $area = $altura * $comprimento;
                return $area;
            }

            exibirBoasVindas();
            echo "<br>";
            echo "A área do terreno é: " . calculaAreaTerreno(10, 20) . "m²";
            
        ?>
        
    </body>
</html>