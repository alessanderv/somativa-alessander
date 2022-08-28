<?php
session_start();
include('verifica_login.php');

	$livro = $_POST['livro_emprestado'];
	$servidor = "localhost";
	$usuario = "root";
	$senha = "root";
	$dbname = "login";
    $nome = "usuario_id";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);;
$id = $_POST['number'];

	
	$result_usuario = "UPDATE usuario SET livro_emprestado = '$livro' WHERE usuario_id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
?>


<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<meta name="viewport" content="width=device=width, initial-scale=1.0">
<link rel="shortcut icon" href="_img/livro.ico" type="image/x-ico/">

<link rel="stylesheet" type="text/css" href="_css\estilo.css"/>
<title> EMPRÉSTIMO </title>
<hr>
 <figure>
    <body background="_img\02IMG_fundo_tela_VERDE.gif"alt="fundo tela" >

    <div style="text-align: center;">
        <h2><img src="_img\03IMG_logo_com_letra2.png" alt="some text" width=130 height=160> </h2>
        <h2><img src="_img\emp.png" alt="some text"  width=530 height=15%  ></h2>
</figure>

<h1>Empréstimo efetuado!<br>com sucesso!</h1>
<h6><h1>Voltar para a página<a href="emprestar-livro.php">emprestar livro</a><br>
        <h6><h1> Se você deseja devolver o livro clique<a href="devolver-livro.php">aqui</a><br><br> Ou <a href="logout.php">Sair"</a> da sessão.
            </h1>
        </h6>
    </h1>
</h6>
</html>