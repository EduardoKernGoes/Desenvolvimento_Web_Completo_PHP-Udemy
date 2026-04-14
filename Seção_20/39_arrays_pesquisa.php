<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

            echo'<pre>';
            print_r($lista_frutas);
            echo'<pre>';

            echo '<hr>';

            //Retorna True ou False para o que queremos pesquisar
            echo in_array('Abacate', $lista_frutas);
            echo '<br>';
            if(in_array('Abacate', $lista_frutas)){
                echo 'O item pesquisado existe na lista';
            } else {
                echo 'O item pesquisado não existe na lista';
            }

            echo '<br>';

            //Retorna o índice pesquisado caso ele exista senão existir retorna NULL enão false
            echo array_search('Abacaxi', $lista_frutas);

            echo '<br>';

            if(array_search('Morango', $lista_frutas)){
                echo 'O item pesquisado existe na lista';
            } else {
                echo 'O item pesquisado não existe na lista';
            }

            $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];
            echo'<pre>';
            print_r($lista_coisas);
            echo'<pre>';

            echo in_array('Uva', $lista_coisas['frutas']);

        ?>
    </body>
</html>