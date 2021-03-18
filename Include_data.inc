<?php
    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    $dia = date ("d");
    $mes = date ("m");
    $ano = date ("y");
    echo "<b> $dia". " de ". $meses[$mes - 1]. " de ". $ano;
    
        
?>

