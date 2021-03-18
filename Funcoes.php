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
        /*function zeroamil ($num)
        {
            if ($num <= 1000)
             {  
                echo $num;
                zeroamil($num + 1);
                
             } 
        }
        
        $num = 0;
        zeroamil($num)        
        
        function dobro ($num)
        {
            $resultado = $num * 2;
            return $resultado;
        }
        function dobro_por_referencia (&$num)  
        {
            $num = $num * 2;
            
        }
        
        
        $num = 10;
        echo dobro($num);
        
        dobro_por_referencia($num);
        echo $num                  */
        
        function media ($n1, $n2, $n3)
        {
            $media = ($n1 + $n2 + $n3) / 3;
            return($media);
        }
        
        $alunos[0]["nome"] = "Fabio";
        $alunos[0]["media"] = media(10,5,8);
        $alunos[1]["nome"] = "Alice";
        $alunos[1]["media"] = media(7,8,9);
        
        for ($c=0; $c<count($alunos); $c++){ //count mede o tamanho da array
            echo "<b>A média do aluno ". $alunos[$c]["nome"]. 
                    " foi de ". $alunos[$c]["media"]. " <br>";
            
        }
        
    
        
                  
             
         
        
        ?>
    </body>
</html>
