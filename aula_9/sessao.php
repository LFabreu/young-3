<?php

// Iniciar uma sessão
session_start();

// Verificar se o usuário ja está logado 
if(isset($_SESSION['user']))
{
    $nome_usuario = $_SESSION['user'];
    header('Location: painel.php');
}
else
{
    if(isset($_POST['user']) && isset($_POST['password']))
    {
        $nome_usuario = $_POST['user'];
        $senha_usuario = $_POST['password'];
        //simular verificação no BD
        if ( !empty($nome_usuario) && !empty($senha_usuario) )
        {
            $_SESSION['user'] = $nome_usuario;
            header('Location: painel.php');
        }
        else{
            header('Location: index.php');
        }
    }
}

?>