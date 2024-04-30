<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
    <link rel="stylesheet" href="../aula_9/css/style.css">
</head>
<body>
    <div class="conteiner">
        <h1>
            Tela de Login
        </h1>
        <form action="verificar.php" method="post">
            <div>
                <label for="user">Nome do usuário</label>
                <input type="text" name="user" id="user" required>
            </div>
            <div>
                <label for="user">Senha</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Entrar</button>
            <button type="reset">Limpar</button>
        </form>

    </div>
</body>
</html>