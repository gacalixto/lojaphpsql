<?php include ("connection.php");
include("usuarioBD.php");
$usuario =buscaUsuario($conexao,$_POST['email'],$_POST['senha']);
if($usuario==NULL)
{
    header("Location: index.php?login=0");
}
    else
    {
        setcookie("usuario_logado",$usuario["email"]);
        header("Location: index.php?login=1");

    }
die();
?>
