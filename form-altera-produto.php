<?php require_once("cabecalho.php"); ?>
<?php require_once("categoriaBD.php");
require_once("produtoBD.php");

$id=$_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias= listaCategorias($conexao);
?>

<h1>Alterar Produto</h1>
<form action="altera-produto.php" method="POST">
    <input type="hidden" name="id" value="<?=$produto['id']?>" />

    <table class="table">
    <?php require_once("produto-formulario-base.php");?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php require_once("rodape.php"); ?>
