<?php
include("functionsUser.php"); 
include("cabecalho.php"); ?>
   <?php if (isset($_GET["login"])&& $_GET["login"]==true){?>
    <p class ="alert-success">Logado com sucesso!
    <?php }?>
    <?php if (isset($_GET["login"])&& $_GET["login"]==false){?>
    <p class ="alert-danger">Usuário ou senha inválida!
    <?php }?>
    <?php if (isset($_GET["falhaDeSeguranca"])&& $_GET["falhaDeSeguranca"]==true){?>
    <p class ="alert-danger">Você não tem acesso a sua funcionalidade
    <?php }?>
    
            <h1>Bem vindo!</h1>
            <?php if (usuarioEstaLogado()) {?>
                <p class ="text-success">Você está logado como <?= usuarioLogado() ?>
            <?php } else {?>

            <h2>Login</h2>
            <form action = "login.php" method ="post">
            <table class ="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type= "email" name = "email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type= "password" name = "senha"></td>
                 </tr>
                 <tr>
                    <td><button class="btn btn-primary">Entrar</button></td>
                 </tr>
            </table>
            </form>
            <?php }?>

            <?php include("rodape.php"); ?>
