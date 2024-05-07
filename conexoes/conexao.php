<?php

$servidor = 'localhost';
// $banco_de_dados = 'test';

$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha);


if($mysqli -> error){
    die("falha ao conectar ao banco de dados: " . $mysqli -> error);
}

$banco_de_dados_existe = $mysqli->select_db('test');

if (!$banco_de_dados_existe){
    $criar_bd_sql = 'CREATE DATABASE test';
    if($mysqli->query($criar_bd_sql) === TRUE)
    {
        echo 'Banco criado com sucesso';
    }
    else{
        echo 'Erro ao criar !!!' . $mysqli->error;
    }
}
// conectar ao banco de dado
$mysqli->select_db('test');

// Verificar se existe a tabela users
$tabela_users_existe = $mysqli->query('SHOW TABLES LIKE "users"')-> num_rows > 0;

// Criar a tabela "users"
if (!$tabela_users_existe){
    $criar_tabela_users = 'CREATE TABLE users(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(50) NOT NULL,
        senha VARCHAR(20) NOT NULL
    )';
    if($mysqli->query($criar_tabela_users) === TRUE)
    {
        echo "Tabela users criada";
    }
    else{
        echo 'Erro ao criar a tabela users!!!' . $mysqli->error;
    }
}

$tabela_produtos_existe = $mysqli->query('SHOW TABLES LIKE "produtos"')-> num_rows>0;

if (!$tabela_users_existe){
    $criar_tabela_produtos = 'CREATE TABLE produtos(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome_produto VARCHAR(50) NOT NULL,
        id_user INT(11) UNSIGNED NOT NULL,
        FOREIGN KEY (id_user) REFERENCES users(id)
    )';
    if($mysqli->query($criar_tabela_produtos) === TRUE)
    {
        echo "\nTabela produtos criada";
    }
    else{
        echo "\nErro ao criar a tabela produtos!!!" . $mysqli->error;
    }
}
?>