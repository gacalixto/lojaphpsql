<?php 
require_once("functionsUser.php");
verificaUsuario();
require_once("cabecalho.php"); ?>
<?php require_once("categoriaBD.php");
require_once("connection.php");
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias= listaCategorias($conexao);

?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="POST">
    <table class="table">
     <?php require_once("produto-formulario-base.php");?>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
