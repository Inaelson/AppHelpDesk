<?php

    session_start();

    // variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;


    // usuarios do sistema
    $usuarios_app = [
        ['email'=>'adm@teste.com','senha'=>'123456'],
        ['email'=>'user@teste.com','senha'=>'112233']
    ];

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] ='SIM';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] ='NAO';
        header('Location: index.php?login=error');
    }

?>