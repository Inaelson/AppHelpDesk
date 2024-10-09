<?php

    session_start();

    // variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;


    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    // usuarios do sistema
    $usuarios_app = [
        ['id' => 1, 'perfil_id' => 1, 'email'=>'adm@teste.com', 'senha'=>'123'],
        ['id' => 2, 'perfil_id' => 1, 'email'=>'user@teste.com', 'senha'=>'123'],
        ['id' => 3, 'perfil_id' => 2, 'email'=>'jose@teste.com', 'senha'=>'123'],
        ['id' => 4, 'perfil_id' => 2, 'email'=>'maria@teste.com', 'senha'=>'123']
    ];

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] ='SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] ='NAO';
        header('Location: index.php?login=error');
    }

?>