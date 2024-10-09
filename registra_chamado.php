<?php

    // $_POST
    session_start();


    $arquivo  = fopen('arquivo.txt', 'a');

    foreach($_POST as $chave => $campo){
       $_POST[$chave] = str_replace('#', '-', $campo);
    }

    $texto = $_SESSION['id'].'#'.implode('#', $_POST).PHP_EOL;

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>