<?php
    require('conexao.php');

    mysqli_query($conexao, 'UPDATE usuarios
        SET nome = "José da Silva", email = "jose.teste@gmail.com", user = "jose.teste" WHERE id = 9');
?>