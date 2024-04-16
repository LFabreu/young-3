<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>
        Tela de Login
    </h1>
    <form action="sessao.php" method="post">
        <div>
            <label for="user">Nome do usuário</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="user">Senha</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Entrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>