<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $number = 2;

            switch($number){
                case 1:
                    echo "O número é 1";
                    break;
                case 2:
                    echo "O número é 2";
                    break;
                case 3:
                    echo "O número é 3";
                    break;
                case 4:
                    echo "O número é 4";
                    break;
                case 5:
                    echo "O número é 5";
                    break;
                default:
                    echo "Número não encontrado";
            }
            
        ?>
        
    </body>
</html>