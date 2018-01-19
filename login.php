<?php include ("connection.php");
include("usuarioBD.php");
include("functionsUser.php");
$usuario =buscaUsuario($conexao,$_POST['email'],$_POST['senha']);
if($usuario==NULL)
{
    header("Location: index.php?login=0");
}
    else
    {
        logaUsuario($usuario["email"]);
        header("Location: index.php?login=1");

    }
die();
?>
