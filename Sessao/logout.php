<?php
    require('registra_sessao.php');

    session_unset();
    session_destroy();

    echo '<h1>Deslogou!</h1>';
?>