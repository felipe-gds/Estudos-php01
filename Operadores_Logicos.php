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
        $usuario = "feipe";
        $senha = 1234;
        if ($usuario == "felipe" && $senha == 1234){
            print "Acesso liberado!";
        }
        elseif($usuario != "felipe" || $senha != 1234){
            print "Acesso negado!";
        }
        ?>
    </body>
</html>
