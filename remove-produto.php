<?php
include("connection.php");
include("produtoBD.php");

include("functionsUser.php");
$id =$_POST['id'];
deletaProduto($conexao,$id);
$_SESSION["success"] = "Produto removido com sucesso.";
header("Location: produto-lista.php");
die();
?>
