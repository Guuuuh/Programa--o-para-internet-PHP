<?php
    session_start();

    echo '<h1>Exemplo 2</h1>';
    echo $_SESSION['disciplina'];

    $_SESSION['disciplina'] = 'Lógica de Programação'
?>