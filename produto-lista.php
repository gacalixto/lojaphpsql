<?php  require_once("functionsUser.php");?>
<?php
    require_once("cabecalho.php");?>

<?php require_once("produtoBD.php");?>
<?php if(array_key_exists("removed",$_GET)&& $_GET['removed']==true)
{?>
<p class="alert-success">Produto apagado com sucesso</p>
<?php
}
?>
<?php $produtos = listaProdutos($conexao);?>
<table class="table table-striped table-bordered">

<tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Descrição</th>
        <th>Categoria</th>
    </tr>
<?php
foreach($produtos as $produto){
    ?>
    
    <tr>
        <td><?=$produto ['nome'] ?></td>
        <td>R$ <?= $produto['preco'] ?></td>
        <td><?= substr($produto ['descricao'],0,100) ?></td>
        <td><?= substr($produto ['categoria_nome'],0,100) ?></td>
        <td> <a class ="btn btn-primary" href="form-altera-produto.php?id=<?=$produto['id']?>"> alterar</a>
        <td> 
            <form action="remove-produto.php" method="POST">
                 <input type ="hidden" name="id" value="<?=$produto['id']?>" />
                 <button class="btn btn-danger">Remover</button>
            </form>
        </td>        
    </tr>
    <?php 
}
?>
</table>
<?php
    require_once("rodape.php");?>