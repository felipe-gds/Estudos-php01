<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include "Config01.php";

    $mysqli->query("UPDATE usuario SET id='$id',nome='$nome',email='$email',senha='$senha' WHERE id='$id'");
    
    echo "<script>alert('Dados alterados com sucesso!')</script>";
        

?>

