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

    <head>
    <body>
    <link rel="stylesheet" type="text/css" href="_css\menu.css"/>
    <div id="meuMenu">
        <ul>
            <li><a href="home.php"> INÍCIO </a></li>
            <li><a href="index.php"> LOGIN </a></li>
            <li><a href="cadastro.php"> CADASTRAR-SE </a></li>
            <li><a href="emprestar-livros.php"> EMPRESTAR LIVROS </a></li>
            <li><a href="fale-conosco.php"> FALE CONOSCO </a></li>
            <li><h></h><a href="logout.php">Sair</a></li>
        </ul>
    </div>
    <hr>

    </body>

    <figure>
        <body background="_img\02IMG_fundo_tela_OPS.gif"alt="fundo tela">

        <div style="text-align: center;">
            <h2><img src="_img\03IMG_logo_com_letra2.png" alt="some text" width=130 height=160> </h2>
            <br>
            <h2><img src="_img\email.png" alt="some text" width=130 height=160> </h2>
            <br>
        </div>
        </body>
    </figure>
</html>


<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não informado';
$assunto = isset($_POST['assunto']) ? $_POST['assunto'] : 'Não informado';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'Não informado';


if($email && $mensagem)  {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'alessander3669@gmail.com';
    $mail->Password = '...';
    $mail->Port = 587;

    $mail->setFrom('alessander3669@gmail.com');
    $mail->addAddress('alessander3669@gmail.com');


    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "Nome: {$nome}<br>
                   Email: {$email}<br>
                   Mensagem: {$mensagem}";



    if($mail->send()) {
       echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado, necessário hospedagem em um servidor!!';
    }
} else {
    echo 'Email não enviado, favor preencher todos os campos do formulário.';
}

