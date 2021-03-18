<?php
   include 'Config01.php';
   $id = $_POST['id'];
   $mysqli->query("DELETE FROM usuario WHERE id='$id'");
   echo"<script>alert('Usuario excluído com sucesso!')</script>";
?>

