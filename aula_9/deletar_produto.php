<?php
include('../conexoes/conexao.php');

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id='$id'";

    if ($mysqli->query($sql) === TRUE)
    {
        header('Location: lista_produtos.php');
        exit();
    }
    else{
        echo 'Deu ruim, motivo ->' . $mysqli->error;
    }
}

$mysqli-> close();

?>