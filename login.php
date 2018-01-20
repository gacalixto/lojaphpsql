<?php require_once ("connection.php");
require_once("usuarioBD.php");
require_once("functionsUser.php");
$usuario =buscaUsuario($conexao,$_POST['email'],$_POST['senha']);
if($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();
?>
