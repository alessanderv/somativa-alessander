<?php
session_start();

include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device=width, initial-scale=1.0">
<link rel="shortcut icon" href="_img/livro.ico" type="image/x-ico/">
<link rel="stylesheet" href="_css/bulma.min.css"/>
<link rel="stylesheet" type="text/css" href="_css\estilo.css"/>

<title> DEVOLVER LIVRO </title>
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



</head>
<figure>
    <body background="_img\02IMG_fundo_tela.gif"alt="fundo tela"></body></figure>

<div style="text-align: center;">
    <figure>
        <h2><img src="_img\03IMG_logo_com_letra2.png" alt="some text" width=130 height=160> </h2>
    </figure>
</div>


<div class="field">
    <br>
    <br>

    <h1> Devolução de livro </h1>
    <br>
    <br>
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="control"></div>
                <div class="select is-fullwidth">


                    <select name="livro">
                        <option>01 — Lolita, Vladímir Nabókov, 1955</option>
                        <option>02 — Enquanto Agonizo, William Faulkner, 1930</option>
                        <option>03 — A Morte de Virgílio, Hermann Broch, 1945</option>
                        <option>04 — Os Lusíadas, Luís de Camões, 1572</option>
                        <option>05 — O Homem Invisível, Ralph Ellison, 1952</option>
                        <option>06 — Hamlet, William Shakespeare, 1603</option>
                        <option>07 — Finnegans Wake, James Joyce, 1939</option>
                        <option>08 — Rumo ao Farol, Virginia Woolf, 1927</option>
                        <option>09 — Pedro Páramo, Juan Rulfo, 1955</option>
                        <option>10 — As Três Irmãs, Anton Tchekhov, 1901</option>
                        <option>11 — Pais e Filhos, de Ivan Turguêniev, 1862</option>
                        <option>12 — Contos da Cantuária, Geoffrey Chaucer, século 15</option>
                        <option>13 — As Viagens de Gulliver, Jonathan Swift, 1726</option>
                        <option>14 — Folhas de Relva, Walt Whitman, 1855</option>
                        <option>15 — Middlemarch, George Eliot, 1874</option>
                        <option>16 — O Apanhador no Campo de Centeio, J. D. Salinger, 1951</option>
                        <option>17 — O Lobo da Estepe, Herman Hesse, 1927</option>
                        <option>18 — O Grande Gatsby, Scott Fitzgerald, 1925</option>
                        <option>19 — A Peste, Albert Camus, 1947</option>
                        <option>20 — O Mestre e Margarida, Mikhail Bulgákov, 1940</option>
                        <option>21 — As Vinhas da Ira, John Steinbeck, 1939</option>
                        <option>22 — Memórias de Adriano, Marguerite Yourcenar, 1951</option>
                        <option>23 — Paralelo 42, John dos Passos, 1930</option>
                        <option>24 — Admirável Mundo Novo, Aldous Huxley, 1932</option>
                        <option>25 — O Jogo da Amarelinha, Julio Cortázar, 1963</option>
                        <option> 26 — A Náusea, Jean-Paul Sartre, 1938</option>
                        <option>27 — A Invenção de Morel, Adolfo Bioy Casares, 1940</option>
                        <option>28 — Memorial do Convento, José Saramago, 1982</option>
                        <option>29 — Crime e Castigo, Fiódor Dostoiévski, 1866</option>
                        <option>30 — Orgulho e Preconceito, Jane Austen, 1813</option>
                        <option>31 — Vale das Bonecas – Jacqueline Susann, 1966</option>
                        <option>32 — Where the Sidewalk Ends – Shel Silverstein, 1974</option>
                        <option>33 — Onde Vivem os Monstros – Maurice Sendak, 1963</option>

                    </select>
                    </select>


                    <form method="POST" action="devolver.php">
                        <div class="field">
                            <div class="control">
                                <input name="livro_emprestado" type="text" class="input is-large" placeholder="Informe o número do para devolução!" autofocus>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label>
                                    <input name="number" type="number" class="input is-large" placeholder="Confirme o seu CPF!" autofocus>
                                </label>
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link is-small">DEVOLVER LIVRO</button>
                            </div>

                    </form>
                </div>
                <div>
                </div>
            </div>
</body>
</html>
