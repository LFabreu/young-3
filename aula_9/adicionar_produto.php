<?php

include('../conexoes/conexao.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == 'GET')
{
    $sql = 'SELECT * FROM produtos';
    $resultado = $mysqli->query($sql);
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $nome = $_POST['nome-img'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['qtd'];
    $url = $_POST['img'];
    $id_user =  $_SESSION['id_user'];

    $sql = "INSERT INTO produtos (id, url_img ,nome_produto,id_user , valor, quantidade) VALUES (NULL, '$url' ,'$nome','$id_user' ,'$valor', '$quantidade')";

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
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_painel.css">
</head>
<body>
    <nav class="barra_navegacao">
        <h1>
            Bem Vindo a WishList
        </h1>
        <a href="logout.php">
            LOGOUT
        </a>
    </nav>
    <main>
        <form action="" method="post" class="info-add">
            <div class="ab">
                <label for="user">Link da Imagem</label>
                <input type="text" name="img" id="img" required>
            </div>
            <div class="ab">
                <label for="user">quantidade</label>
                <input type="number" name="qtd" id="qtd" required>
            </div>
            <div class="ab">
                <label for="user">Nome do produto</label>
                <input type="text" name="nome-img" id="nome-img" required>
            </div>
            <div class="ab">
                <label for="user">Valor</label>
                <input type="number" name="valor" id="valor" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
            
    </main>
</body>
</html>