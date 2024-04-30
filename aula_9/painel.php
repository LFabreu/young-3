<?php
session_start();

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
        <div class="barra_navegacao">
            <h1>
                Bem Vindo a WishList, <?php echo $nome_user; ?>
            </h1>
            <a href="logout.php">
                LOGOUT
            </a>
        </div>
        <table>
            
        </table>

    </main>
</body>
</html>