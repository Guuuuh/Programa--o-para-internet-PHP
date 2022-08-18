<?php
    session_start();

    $_SESSION['disciplina'] = 'Programação para Internet';

    echo $_SESSION['disciplina'];
?>