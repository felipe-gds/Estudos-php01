<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

include "config01.php";

$mysqli->query("INSERT into usuario(nome, email, senha) VALUES('$nome', '$email', '$senha')");

echo "<script>alert('Usuário cadastrado com sucesso!')</script>";

?>



