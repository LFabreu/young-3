<?php

if(isset ($_POST['entrada'])){
    echo 'oi';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conteiner">
        <h1>
            Lista de tarefas
        </h1>
        <form action="adicionar_tarefa.php" method="POST" id="formulario">
            <input 
            type="text" id="entrada" name="entrada" class="entrada" placeholder="+ Tarefa" autocomplete="off">
            <ul class="tarefas" id="tarefas">
            </ul>
        </form>
        <small>
            Botão esquerdo completar tarefa.
            <br> Botão direito excluir tarefa.
        </small>
    </div>
    <script src="script.js"></script>   
</body>
</html>