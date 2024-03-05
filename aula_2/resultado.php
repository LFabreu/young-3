<?php
    $operacao = $_POST["operacao"];
    $n1 =  (int) $_POST["n1"];
    $n2 =  (int) $_POST["n2"];

    if ($operacao == "adicao") {
        echo $n1 + $n2;
    }
    elseif($operacao == "subtracao"){
        echo $n1 - $n2;
    }
    elseif($operacao == "multiplicacao"){
        echo $n1 * $n2;
    }
    elseif($operacao == "divisao"){
        echo $n1 / $n2;
    }
    elseif($operacao == ""){
        echo"operação invalida";
    }

    
    

?>