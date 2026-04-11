<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php
            //Váriavel String
            $nome = 'Eduardo';
            $idade = 20;
            $peso = 85.6;
            $fumante = false; //true = '1' e false = vazio
        ?>

        <h1>Ficha cadastral</h1>
        <p>Nome: <?php echo $nome; ?></p>
        <p>Idade: <?php echo $idade; ?></p>
        <p>Peso: <?php echo $peso; ?></p>
        <p>Fumante: <?php echo $fumante ? 'Sim' : 'Não'; ?></p>
        
    </body>
</html>