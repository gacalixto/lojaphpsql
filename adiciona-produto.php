<?php 

require_once("functionsUser.php");
verificaUsuario();
require_once("cabecalho.php"); ?>


<?php

require_once("produtoBD.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao =$_POST["descricao"];
$categoria_id=$_POST["categoria_id"];
if(array_key_exists('usado',$_POST))
{
    $usado="true";
}
    else
    {
        $usado="false";
    }
$conexao = mysqli_connect('localhost', 'root', 'iero1201', 'loja');

if(insereProduto($conexao, $nome, $preco,$descricao,$categoria_id,$usado)) { ?>
    <p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php require_once("rodape.php"); ?>
