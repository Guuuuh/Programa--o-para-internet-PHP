<?php
    session_start();

    unset($_SESSION['disciplina']);

    echo $_SESSION['disciplina'];
?>