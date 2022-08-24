<?php
    require('conexao.php');

    $id = $_GET['id'];
    if (is_null($id)) {
        echo '<h3>Código não informado. </h3>';
    }

    mysqli_query($conexao, "DELETE FROM usuarios WHERE id = $id");
?>

<a href="select.php">Listagem</a>