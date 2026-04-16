<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try{
            $conexao = new PDO($dsn, $usuario, $senha);

            /*
            $query = '
                create table if not exists tb_usuarios(
                    id int not null primary key auto_increment,
                    nome varchar(50) not null,
                    email varchar(50) not null,
                    senha varchar(32) not null
                )
            ';

            $retorno = $conexao->exec($query);

            echo $retorno;

            $query = '
                insert into tb_usuarios(
                    nome, email, senha
                ) values(
                    "Eduardo Goes", "edugoes215@gmail.com", "123456" 
                )
            ';

            $retorno = $conexao->exec($query);

            echo $retorno;

            $query = '
                insert into tb_usuarios(
                    nome, email, senha
                )values(
                    "Carlos Rodrigo", "teste@gmail.com", "123"
                )
            ';

            $conexao->exec($query);

            $query = '
                insert into tb_usuarios(
                    nome, email, senha
                )values(
                    "Ana Carla", "teste2@gmail.com", "abcd"
                )
            ';

            $conexao->exec($query);

            $query = '
                insert into tb_usuarios(
                    nome, email, senha
                )values(
                    "fabio Nilo", "teste3@gmail.com", "egdfbd"
                )
            ';

            $conexao->exec($query);

            $query = '
                select * from tb_usuarios
            ';

            $stmt = $conexao->query($query);

            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo '<pre>';
            print_r($lista);
            echo '</pre>';

            $query = '
                select * from tb_usuarios
            ';

            $stmt = $conexao->query($query);

            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($lista as $key => $value){
                echo $value['nome'];
                echo'<hr>';
            }

            $query = '
                select * from tb_usuarios
            ';

            foreach($conexao->query($query) as $key => $valor){
                print_r($valor);
                echo '<hr>';
            }

            */

            $query = "
                select * from tb_usuarios where
                email = :usuario
                AND
                senha = :senha
            ";
            
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt->execute();

            $usuario = $stmt->fetch();

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';

        }catch(PDOException $e){
            echo 'Erro: ' . $e->getCode() . 'Mensagem: ' . $e->getMessage();
        }
        
    }

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" placeholder="usuario" name="usuario"/>
            <input type="password" placeholder="senha" name="senha"/>

            <button type="submit">Entrar</button>
        </form>
    </body>
</html>