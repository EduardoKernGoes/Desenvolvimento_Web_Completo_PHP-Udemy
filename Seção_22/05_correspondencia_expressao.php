<?php

    $busca = 3;

    //Maneira "padrão"
    switch($busca){
        case '1':
            echo 'Número 1 como string';
            break;
        
        case 2:
            echo 'Número 2 como integer';
            break;

        default:
            echo "Nada";
    }

    echo '<hr>';

    //Utilizando match (PHP8)
    $resultadoMatch = match($busca){
        '1' => 'Número 1 como string',
        1 => 'Número 1 como integer',
        '2' => 'Número 2 como string',
        2 => 'Número 2 como integer',
        3, '3' => 'Número 3 como integer ou string',
        default => 'Nada'
    };

    echo $resultadoMatch;

    echo '<hr>';

    //Utilizando match com condicionais
    $resultadoMatchCondicionais = match(true){
        $busca > 0 => 'Número maior que 0',
        $busca < 0 && $busca > -5 => 'Número está entre 0 e -5 (não inclusos)',
        default => 'Nada',
    };

    echo $resultadoMatchCondicionais;

?>