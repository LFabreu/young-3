<!-- <?php
include('conexao.php');

if (
    isset($_POST['nome']) || 
    isset($_POST['sobrenome']) ||
    isset($_POST['email']) ||
    isset($_POST['telefone']) ||
    isset($_POST['senha']) ||
    isset($_POST['longradouro']) ||
    isset($_POST['tipo']) ||
    isset($_POST['numero']) ||
    isset($_POST['confirme-senha'])
    )
{
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $longradouro = $_POST['longradouro'];
    $tipo = $_POST['tipo'];
    $numero = $_POST['numero'];

    $sql_query = "INSERT INTO clientes ('nome', 'sobrenome', 'email', 'telefone', 'senha', 'longradouro', 'tipo', 'numero')
    VALUES ($nome, $sobrenome, $email, $telefone, $senha, $longradouro, $tipo, $numero)
    ";

    $enviar = $mysqli->query($sql_query);
}

?> -->

<php
echo 'oi';