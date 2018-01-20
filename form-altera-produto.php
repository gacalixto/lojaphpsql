<?php include("cabecalho.php"); ?>
<?php include("categoriaBD.php");
include("produtoBD.php");
include("connection.php");
$id=$_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias= listaCategorias($conexao);
?>

<h1>Alterar Produto</h1>
<form action="altera-produto.php" method="POST">
    <input type="hidden" name="id" value="<?=$produto['id']?>" />

    <table class="table">
    <?php include("produto-formulario-base.php");?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
