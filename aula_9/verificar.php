<?php
include('../conexoes/conexao.php');

session_start();


if(isset($_SESSION['user']))
{
    $nome_usuario = $_SESSION['user'];
    header('Location: painel.php');
}
else{
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $user = $_POST['user'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM users";
        $sql_query = $mysqli->query($sql);
        $quantidade_linhas = $sql_query->num_rows;
        
        if($quantidade_linhas == 1){
            $usuario = $sql_query->fetch_assoc();
            
            $nome_tabela = $usuario['user'];
            $senha_tabela = $usuario['senha'];
            
            if($user==$nome_tabela && $password==$senha_tabela){
                $_SESSION['user'] = $nome_tabela;
                header("Location: sessao.php");
                exit();
            }
            else{
                header('Location: index.php');
            }
        }
    }
}
$mysqli->close();



?>