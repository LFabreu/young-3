<?php
include('../conexoes/conexao.php');

$sql = 'SELECT * FROM produtos';
$resultado = $mysqli->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista produtos</title>
</head>
<body>
    <div>
        <h1>Estoque</h1>
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
                    echo '<td>' . $row['nome'] . '</td>';
                    echo '<td>' . $row['valor'] . '</td>';
                    echo '<td>' . $row['quantidade'] . '</td>';
                    echo '<td><a href="editar_produtos.php?id='. $row['id'] . '">Editar</a> | <a href="deletar_produto.php?id='. $row['id'] . '">Deletar</a>';
                    echo '</tr>';
                }
            }
            else{
                echo '<tr><td colspan="4">Nenhum produto encontrado</td></tr>';
            }

            ?>
        </table>
    </div>
</body>
</html>

<?php
$mysqli->close();


?>

