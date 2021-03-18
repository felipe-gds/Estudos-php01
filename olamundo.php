<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Primeiro Script</title>
    </head>
    <body>
        <?php
        /* Para imprimir podemos usar "echo ou print
          Variaveis comecam com cifrao $
        $nome = "Pedro";
        $idade = 24;
        $altura = 1.75;
        $aprovado = true;
        echo $nome . " tem " . $idade . " anos e mede " . $altura . " de altura ". "</br>";
        echo "<h2 align = center  >Ele tem $idade anos e $altura de altura, e seu nome é $nome.</h2>";*/

        //ARRAY
        
        /*$nome = array(0 => "joao", 1 => "maria", "teste" => "pedro" );
        echo "$nome[0]<br>";
        echo "$nome[1]<br>";
        echo "$nome[teste]<br>"*/
        
        //listas
        list($primeiro, $segundo, $terceiro) = array("a", "b", "c");
        echo "$primeiro<br>";
        echo "$segundo<br>";
        echo "$terceiro<br>";

        $produtos = array (3 => "relógio", 0 => "pulseira", 1 => "brinco", 2 => "anel"); //o que vale é o indice e não a ordem!
        list ($a, $b, $c, $d) = $produtos; //a ordem que vale(bca ou abc  ...) e não o valor expresso.
        echo "$a<br>";
        echo "$c<br";
        
        
        
        
        
        ?>
    </body>
</html>
