<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //echo str_replace('.', '', str_repeat('-', '', $login));

    $data = explode('/', $login);
    if (checkdate($data[1], $data[0], $data[2])) {
        echo 'Data válida';
    }   else {
        echo 'Data inválida';
    }

    if (is_null($login OR $login == '' or strlen($login) == 0)) {
        echo '<h3>Login não pode estar vazio.</h3>';
    }

    if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
        echo '<h3>E-mail inválido.</h3>';
    }
    
    if (is_null($senha)) {
        echo '<h3>Senha em branco.</h3>';
    }

    if (is_numeric($senha)) {
        echo '<h3>Todos os caracteres são números.</h3>';
    } else {
        echo '<h3>Senha incorreta.</h3>';
    }
?>