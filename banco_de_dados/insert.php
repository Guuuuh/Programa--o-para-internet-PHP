<?php
    require('conexao.php');

    mysqli_query($conexao, "INSERT INTO usuarios (id, nome, email, user, senha) VALUES (NULL, 'Francisco', 'chico.amaral@gmail.com', 'chico.amaral', 'chicao')");
?>