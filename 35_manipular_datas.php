<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            //Recuperação da data atual
            echo date('d') . "<br>"; //Dia do mês
            echo date('D') . "<br>"; //Dia da semana (três letras)
            echo date('h') . "<br>"; // Hora (formato 12h)
            echo date('H') . "<br>"; // Hora (formato 24h)
            echo date('i') . "<br>"; // Minutos
            echo date('s') . "<br>"; // Segundos
            echo date('d/m/Y H:i:s') . "<br>"; // Data atual completa

            echo date_default_timezone_get() . "<br>"; // Fuso horário atual
            date_default_timezone_set('America/Sao_Paulo'); // Configura o fuso horário para São Paulo
            echo date_default_timezone_get() . "<br>"; // Fuso horário atualizado
            echo date('d/m/Y H:i:s') . "<br>"; // Data atual completa

            $data_inicial = '2024-01-01';
            $data_final = '2024-07-26';

            $timeInicial = strtotime($data_inicial);
            echo $data_inicial . " - " . $timeInicial . "<br>";

            $timeFinal = strtotime($data_final);
            echo $data_final . " - " . $timeFinal . "<br>";

            $diferenca = $timeFinal - $timeInicial;
            echo "Diferença em segundos: " . $diferenca . "<br>";

            echo "Diferença em minutos: " . $diferenca /60 . "<br>";

            echo "Diferença em horas: " .( $diferenca /60) /60 . "<br>";

            echo "Diferença em dias: " . (($diferenca /60) /60) /24 . "<br>";
            
        ?>
        
    </body>
</html>