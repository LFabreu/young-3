<?php
include('../conexoes/conexao.php');

session_start();
$sql = 'SELECT * FROM produtos';
$resultado = $mysqli->query($sql);
$nome_user = $_SESSION['user']
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
    <main>
        <nav class="barra_navegacao">
            <h1>
                Bem Vindo a WishList, <?php echo $nome_user; ?>
            </h1>
            <a href="logout.php">
                LOGOUT
            </a>
        </nav>
        <table>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <div class="tabela-info">
                <?php
            if ($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    echo '<tr>';
                    echo '<td> <img src="' . $row['url_img'] . '"></td>';
                    echo '<td>' . $row['nome_produto'] . '</td>';
                    echo '<td>' . $row['valor'] . '</td>';
                    echo '<td>' . $row['quantidade'] . '</td>';
                    echo '<td><a href="editar_produto.php?id='. $row['id'] . '">Editar</a> | <a href="deletar_produto.php?id='. $row['id'] . '">Deletar</a>';
                    echo '</tr>';
                }
            }
            else{
                echo '<tr><td colspan="4">Nenhum produto encontrado</td></tr>';
            }
            ?>
            </div>
        </table>

    </main>
</body>
</html>