<?php
include('../conexoes/conexao.php');
session_start();
$nome_user = $_SESSION['user'];
if (isset($_GET['id']));
{
    $id = $_GET['id'];

    $sql = "SELECT nome_produto FROM produtos WHERE id='$id'";
    $resultado = $mysqli->query($sql);

    if($resultado->num_rows > 0)
    {
        $row = $resultado->fetch_array();
        // $nome_produto = $_GET['nome_produto'];
        // var_dump($nome_produto);
        // $id_user = $_POST['id_user'];
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
$mysqli->close()

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
        <div class="barra_navegacao">
            <h1>
                Bem Vindo a WishList, <?php echo $nome_user; ?>
            </h1>
            <a href="logout.php">
                LOGOUT
            </a>
        </div>
        <table>
        <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php
            if ($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nome_produto'] . '</td>';
                    echo '<td>' . $row['id_user'] . '</td>';
                    echo '</tr>';
            }
            }
            else{
                echo '<tr><td colspan="4">Nenhum produto encontrado</td></tr>';
            }

            ?>
        </table>

    </main>
</body>
</html>