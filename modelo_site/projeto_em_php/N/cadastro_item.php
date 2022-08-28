<?php
    session_start();
    include('verifica_login.php');
include("conexao.php");
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device=width, initial-scale=1.0">
            <link rel="shortcut icon" href="_img/livro.ico" type="image/x-ico/">
            <link rel="stylesheet" type="text/css" href="_css\estilo.css"/>
            <link rel="stylesheet" type="text/css" href="_css\estilo_notific.css"/>
            <link rel="stylesheet" type="text/css" href="_css\menu.css"/>
        </head>
            <title> ADMIN </title>
                <body background="_img\02IMG_fundo_tela_ADM.gif"alt="fundo tela">
                    <div style="text-align: center;">
                        <h2><img src="_img\admin.png" alt="some text" width=205 height=200> </h2>
                            <h1><section class="hero is-success is-fullheight">
                                <div class="hero-body">
                                    <div class="container has-text-centered">
                                        <div class="column is-4 is-offset-4">
                                            <h3 class="title has-text-grey">admin (CADASTRO LIVROS)</h3>
                                            <div class="notification is-success">
                                            </div>
                                            <div class="box">
                                             <form action="cadastrar_item.php" method="POST">
                                            <div class="field">
                                            <div class="control">
                                            <input name="livro" type="text" class="input is-large" placeholder="Livro" autofocus>
                                        </div>
                                    </div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar o livro</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div></h1>
        </div>
        </body>
        </html>





