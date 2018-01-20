<?php 
include("functionsUser.php");
verificaUsuario();
include("cabecalho.php"); ?>
<?php include("categoriaBD.php");
include("connection.php");
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias= listaCategorias($conexao);

?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="POST">
    <table class="table">
     <?php include("produto-formulario-base.php");?>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
