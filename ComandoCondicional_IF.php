<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $valor = 400;
        if ($valor >= 1000)
        {
            echo "Você recebeu um desconto de 10%!</br>";
            $valor_final = $valor * 0.9;
            echo "Valor da compra R$ $valor_final";
        }
        elseif ($valor >= 500 and $valor < 1000) 
        {    
            echo "Você recebeu um desconto de 5%!</br>";
            $valor_final = $valor * 0.95;
            echo "Valor da compra R$ $valor_final";
        }
        else
        {
            echo "Valor da compra R$ $valor";   
        }
        ?>
    </body>
</html>
