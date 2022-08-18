<?php
    require('registra_sessao.php');

    if(@$_SESSION['statusUser'] == false)
    {
        echo '<h2>Sem permissão.</h2>';
    }
    else
    {
        echo '<h1>HOME</h1>';
        echo '<p>' .$_SESSION['nameUser']. '</p';
    }
?>