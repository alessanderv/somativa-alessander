<?php
session_start();

?>
<!DOCTYPE html>
    <html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
<link rel="shortcut icon" href="_img/livro.ico" type="image/x-ico/">

<title> EMPRESTE LIVROS </title>
<link rel="stylesheet" type="text/css" href="_css\estilo.css"/>
<link rel="stylesheet" type="text/css" href="_css\estilo_notific.css"/>

<head>
<body>
<link rel="stylesheet" type="text/css" href="_css\menu.css"/>
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

</body>

<figure>
    <body background="_img\02IMG_fundo_tela.gif"alt="fundo tela">

    <div style="text-align: center;">
        <h2><img src="_img\03IMG_logo_com_letra2.png" alt="some text" width=130 height=160> </h2>
  </figure>



    <h1><section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro</h3>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="notification is-success">
                        <h>Cadastro efetuado!</h>
                        <h6><p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p></h6>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-info">
                        <h5>O usuário escolhido já existe.<br> Informe outro e tente novamente.</h5>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="nascimento" class="input is-large" type="date" size="30"  name="nascimento">
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>

                        </form></h1>
                        </form>
                    </div>
                </div>
            </div>
        </div></h1>
    </section>
    </body>
</html>





