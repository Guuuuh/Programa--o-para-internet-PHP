<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <form action="validacao.php" method="post">
        <p>
            <label for="login">Login: </label>
            <input type="text" id="login" name="login">
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha">
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>