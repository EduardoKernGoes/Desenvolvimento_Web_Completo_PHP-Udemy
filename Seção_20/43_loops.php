<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            echo '<h1 style="margin: 0;">While:</h1>';

                $num_while = 1;

                echo '--Inicio do loop while-- <br>';

                while($num_while <= 10){
                    echo $num_while . '<br>';
                    $num_while++;
                }
                
                echo '--Final do loop while-- <br>';

            echo '<hr><h1 style="margin: 0;">Do-While:</h1>';

                $num_do_while = 11;

                echo '--Inicio do loop do-while-- <br>';

                do{
                    echo $num_do_while . '<br>';
                    $num_do_while++;
                } while($num_do_while <= 10);
                
                echo '--Final do loop do-while-- <br>';

            echo '<hr><h1 style="margin: 0;">For:</h1>';

                $num_for = 10;

                echo '--Inicio do loop for-- <br>';

                for($i = 1; $i <= $num_for; $i++){
                    echo $i . '<br>';
                }

                echo '--Final do loop for-- <br>';

            echo '<hr><h1 style="margin: 0;">ForEach:</h1>';

                $array = ['Banana', ['Mesa', 'Cadeira', 'Sofá'], 'Morango', 'Abacate', 'Maça'];

                foreach($array as $indice1 => $item){
                    if(is_array($item)){
                        foreach($item as $indice2 => $itens){
                            echo "ID - $indice1 - ID2 - $indice2 - $itens<br>";
                        }
                    }else{
                        echo "ID - $indice1 - $item<br>";
                    }
                }

            echo '<hr><h1 style="margin: 0;">Prática:</h1>';

                $titulos = [
                    [
                        'titulo' => '<h2>Título Notícia 1</h2>',
                        'conteudo' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas libero ex, convallis quis facilisis ac, sagittis semper dui. Aliquam tellus neque, sollicitudin cursus diam in, mollis fermentum est.</p>'
                    ],
                    [
                        'titulo' => '<h2>Título Notícia 2</h2>',
                        'conteudo' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas libero ex, convallis quis facilisis ac, sagittis semper dui. Aliquam tellus neque, sollicitudin cursus diam in, mollis fermentum est.</p>'
                    ],
                    [
                        'titulo' => '<h2>Título Notícia 3</h2>',
                        'conteudo' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas libero ex, convallis quis facilisis ac, sagittis semper dui. Aliquam tellus neque, sollicitudin cursus diam in, mollis fermentum est.</p>'
                    ],
                    [
                        'titulo' => '<h2>Título Notícia 4</h2>',
                        'conteudo' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas libero ex, convallis quis facilisis ac, sagittis semper dui. Aliquam tellus neque, sollicitudin cursus diam in, mollis fermentum est.</p>'
                    ]
                ];

                for($i = 0; $i < count($titulos); $i++){
                    echo $titulos[$i]['titulo'];
                    echo $titulos[$i]['conteudo'];

                    echo '<hr>';
                }
            
        ?>
    </body>
</html>