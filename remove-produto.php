<?php
include("connection.php");
include("produtoBD.php");
$id =$_POST['id'];
deletaProduto($conexao,$id);
header("Location: produto-lista.php?removed=true");
die();
?>
