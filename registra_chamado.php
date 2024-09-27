<?php

    // $_POST


    $arquivo  = fopen('arquivo.txt', 'a');

    foreach($_POST as $chave => $campo){
       $_POST[$chave] = str_replace('#', '-', $campo);
    }

    $texto = implode('#', $_POST).PHP_EOL;

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>