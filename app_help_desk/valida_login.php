<?php

    session_start();
    
    $autenticacao_usuario = false;
    $id_usuario = null;
    $perfil_usuario = null;

    $perfis = [1 => 'Administrativos', 2 => 'Usuario'];

    $usuarios = [
        [
            'id' => '1',
            'email' => 'adm@teste.com.br',
            'senha' => '123456',
            'perfil' => 1
        ],
        [
            'id' => '2',
            'email' => 'user@teste.com.br',
            'senha' => '123',
            'perfil' => 1
        ],
        [
            'id' => '3',
            'email' => 'jose@teste.com.br',
            'senha' => '123',
            'perfil' => 2
        ],
        [
            'id' => '4',
            'email' => 'maria@teste.com.br',
            'senha' => '123',
            'perfil' => 2
        ],
    ];

    foreach($usuarios as $user){
        if($_POST['email'] === $user['email'] && $_POST['senha'] === $user['senha']){
            $autenticacao_usuario = true;
            $id_usuario = $user['id'];
            $perfil_usuario = $user['perfil'];
            break;
        }
    }

    if($autenticacao_usuario){
        echo 'Acesso liberado<br>';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $id_usuario;
        $_SESSION['perfil'] = $perfil_usuario;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>