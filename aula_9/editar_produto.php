<?php
include('../conexoes/conexao.php');
session_start();
$sql = 'SELECT * FROM produtos';
$nome_user = $_SESSION['user'];
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_assoc();
if (isset($_GET['id']));
{
    $id = $_GET['id'];

    $sql = "SELECT * FROM produtos";
    $resultado = $mysqli->query($sql);
    if($resultado->num_rows > 0)
    {
        $row = $resultado->fetch_array();
        $nome_produto = $row['nome_produto'];
        $quantidade = $row['quantidade'];
        $url = $row['url_img'];
    }
    else
    {   
        echo 'Produto não encontrado!';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = $_POST['id'];
    $nome_produto = $_POST['nome_produto'];
    $id_user = $_POST['id_user'];

    $sql = "UPDATE produtos SET nome_produto='$nome' WHERE id='$id'";

    if ($mysqli->query($sql) === TRUE)
    {
        header("Location: lista_produtos.php");
        exit();
    }
    else{
        echo "erro ao atualizar motivo ->" . $mysqli->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
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
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php
            
            echo '<tr>';
            echo '<td> <img src="' . $url . '"></td>';
            echo '<td>' . $nome_produto . '</td>';
            echo '<td>' . $quantidade . '</td>';
            echo '<td>'  ;
            echo '</tr>';
            ?>
        </table>
    </main>
</body>
</html>