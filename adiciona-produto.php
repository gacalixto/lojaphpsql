<?php 
if (!isset($_COOKIE["usuario_logado"]))
{
    header("Location:index.php?falhaDeSeguranca=true");
    die();
}
include("functionsUser.php");
verificaUsuario();
include("cabecalho.php"); ?>


<?php

include("produtoBD.php");
include("connection.php");

verificaUsuario();

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

<?php include("rodape.php"); ?>
