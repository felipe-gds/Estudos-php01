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
        $c = 1;
        $acumulador = 0;
        while ($c <= 100){
            $acumulador = $acumulador + 2;
            print "$acumulador</br>";
            $c++; //Equivale a $c = $c + 1
        } 
        //Variação do While;     
        $c2 = 1;
        do{
           print"$c2</br>";
           $c2++;
        }
        while ($c2 <= 100);       
       ?>
    </body>
</html>
