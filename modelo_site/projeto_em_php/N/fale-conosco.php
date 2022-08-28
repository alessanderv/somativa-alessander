<?php
session_start();

include('verifica_login.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device=width, initial-scale=1.0">
<link rel="shortcut icon" href="_img/livro.ico" type="image/x-ico/">

<title> EMPRESTE LIVROS </title>
<link rel="stylesheet" type="text/css" href="_css\estilo.css"/>
<link rel="stylesheet" type="text/css" href="_css\bulma.min.css"/>
<link rel="stylesheet" href="_css/bulma.min.css"/>
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
        <section class="section">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-half">
                        <h1 class="title has-text-centered">Formulário</h1>

                       <form action="enviar.php" method="POST">
                            <div class="field">
                                <label class="label">Nome</label>
                                <div class="control">
                                    <input name="nome" class="input" type="text" placeholder="Seu nome">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Email *</label>
                                <div class="control">
                                    <input name="email" class="input" type="email" placeholder="Seu E-mail">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Assunto:</label>
                                <div class="control"></div>
                                <div class="select is-fullwidth">
                                    <select name="assunto">
                                        <option>_________> — SELECIONE AQUI — <<<</option>
                                        <option>01 — Sugestões/reclamações.</option>
                                        <option>02 — Problemas no site.</option>
                                        <option>03 — Problemas na minha conta.</option>
                                        <option>04 — Dúvidas.</option>
                                        <option>05 — Outros.</option>
                                    </select>

                                    </select>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Mensagem *</label>
                                <div class="control">
                                    <textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem"
                                              maxlength="2000"></textarea>
                                </div>
                            </div>
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link is-small">Enviar</button>

                                </div>
                        </form>
                    </div>
                    <div>
                    </div>
        </section>
    </body>
</html>

