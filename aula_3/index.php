<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 3 - tela login</title>
</head>
<body>
    <main>
        <h1>
            Acesse a sua conta
        </h1>
        <form action="verificar.php" method="post">
            <div>
                <label>E-mail</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="pass">
            </div>
            <div>
                <button type="submit">Entrar</button>
            </div>

        </form>
    </main>
</body>
</html>