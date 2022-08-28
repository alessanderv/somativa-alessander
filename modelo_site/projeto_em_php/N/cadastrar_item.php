<?php
session_start();
include("conexao.php");

$usuario_id = mysqli_real_escape_string($conexao, trim($_POST['usuario_id']));
    $livro_id = mysqli_real_escape_string($conexao, trim($_POST['livro_id']));
        $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
            $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
                $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
                    $nascimento = mysqli_real_escape_string($conexao, trim($_POST['nascimento']));
                        $livro = mysqli_real_escape_string($conexao, trim($_POST['livro']));
                            $livro_emprestado = mysqli_real_escape_string($conexao, trim($_POST['livro_emprestado']));

                            $sql = "select count(*) as total from produtos where produtos ='$livro'";
                        $result = mysqli_query($conexao, $sql);
                    $row = mysqli_fetch_assoc($result);

                if($row['total'] == 1) {
            $_SESSION['item_ja_cadastrado'] = true;
        header('Location: cadastro_item.php');
    exit;
}
$sql = "INSERT INTO produtos (livro_id, livro) VALUES ('$livro_id', '$livro')";
    IF($conexao->query($sql) === TRUE){
        $_SESSION['status_cadastro_item'] = true;
            }
                $conexao->close();
                    header('Location: cadastro_item.php');
                        exit;  ?>



