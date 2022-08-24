<table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Usuário</td>
        <td>Opções</td>
    </tr>
<?php
    require("conexao.php");

    $resultado = mysqli_query($conexao, "SELECT * FROM usuarios");

    while($registro = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo '<td>'.$registro['id'].'</td>';
        echo "<td>" .$registro["nome"]. "</td>";
        echo "<td>" .$registro["email"]. "</td>";
        echo "<td>" .$registro["user"]. "</td>";
        echo '<td><a href="delete.php?id=' .$registro['id'].' ">Excluir</a></td>';
        echo "</tr>";
    }
?>
</table>