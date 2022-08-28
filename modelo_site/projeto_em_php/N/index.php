<?php
session_start();?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <link rel="shortcut icon" href="_img/livro.ico" type="image/x-ico/">
    </head>
    <title> EMPRESTE LIVROS </title>
    <head>
<body>
<link rel="stylesheet" type="text/css" href="_css\menu.css"/>
<link rel="stylesheet" type="text/css" href="_css\estilo.css"/>
<link rel="stylesheet" type="text/css" href="_css\estilo_notific.css"/>
<div id="meuMenu">
    <ul>
        <li><a href="home.php"> INÍCIO </a></li>
        <li><a href="index.php"> LOGIN </a></li>
        <li><a href="cadastro.php"> CADASTRO </a></li>
        <li><a href="emprestar-livros.php"> EMPRESTAR LIVROS </a></li>
        <li><a href="devolver-livro.php"> DEVOLVER </a></li>
        <li><a href="fale-conosco.php"> FALE CONOSCO </a></li>
        <li><h></h><a href="logout.php">Sair</a></li>
    </ul>
</div>
<hr>
<figure>
    <body background="_img\02IMG_fundo_tela.gif"alt="fundo tela">

    <div style="text-align: center;">
        <h2><img src="_img\03IMG_logo_com_letra2.png" alt="some text" width=130 height=160> </h2>
    </div>
    </body>

    <body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">

            <h1>Login</h1>
            <?php
            if(isset($_SESSION['nao_autenticado'])):
                ?>
                <h5><div class="notificacao">
                        ERRO: Usuário ou senha inválidos.
                    </div></h5>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <div class="box">
                <h1><form action="login.php" method="POST">
                        <div class="field">
                            <div class="control">
                                <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                            </div>
                        </div>
                        <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>

                        <h6>Ainda não possui uma conta?<br>
                            <a href="cadastro.php">Cadastre-se</a></h6>
                    </form></h1>
            </div>
        </div>
        </div>
    </section>
    </body>

</html>







