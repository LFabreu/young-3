<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    include('../conexoes/conexao.php');
    $user = $_POST['user'];
    $senha = $_POST['password'];

    $sql = "INSERT INTO users (id, user ,senha) VALUES (NULL, '$user' ,'$senha')";

    if($mysqli->query($sql) == TRUE){
        header("Location: painel.php");
        exit();
    }
    else{
        echo 'deu ruim' . $mysqli->error;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
    <link rel="stylesheet" href="../aula_9/css/style.css">
</head>
<body>
    <nav class="barra_navegacao">
        <h1>
            Bem Vindo a WishList
        </h1>
        <a href="index.php">
            Já possui Login?
        </a>
    </nav>
    <main>
        
        <div class="conteiner">
            <h1>
                Tela de Cadastro
            </h1>
            <form method="post">
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
    </main>
</body>