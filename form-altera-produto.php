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
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value=<?=$produto['nome']?> /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" value=<?=$produto['preco']?> /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id" class = "form-control">

                <?php 
                foreach($categorias as $categoria):
                   $categoriaEscolhida = $produto['categoria_id'] ==$categoria['id'];
                   $selection = $categoriaEscolhida ? "selected='selected'" : "";
                    ?>
                 <option value="<?=$categoria['id']?>" <?=$selection?>>
                 <?=$categoria['nome']?>
                </option>
                 <?php endforeach?>
                </select>
            </td>
            </tr>
            <?php
                $usado = $produto['usado']? "checked='checked '" : "";
                ?>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado

            </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
