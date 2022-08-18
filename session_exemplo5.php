<?php
    session_start();

    $_SESSION['idUser'] = 123;
    $_SESSION['nameUser'] = 'João da Silva Santo';
    $_SESSION['statusUser'] = true;
    $_SESSION['rolesUser'] = [1, 9, 23, 41, 97];
    $_SESSION['moduleUser'] = [4, 8, 3];

    var_dump($_SESSION);
?>