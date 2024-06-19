<?php
session_save_path('/session');
session_start();
if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
    print ("<script>alert('Informe dados para login'); </script>");
    print ("<script>location.href='/login'; </script>");
}
include ('../database/config.php');

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

$res = $conn->query($sql) or die($conn->error);

$user = $res->fetch_assoc();

if (password_verify($senha, $user['senha'])) {
    $qtd = $res->num_rows;
    if ($qtd > 0) {
        $_SESSION["id"] = $user['id'];
        $_SESSION["nome_completo"] = $user['nome_completo'];
        $_SESSION["email"] = $user['email'];
        $_SESSION["telefone"] = $user['telefone'];
        header("Location: /");
    }
} else {
    print ("<script>alert('Usuário e/ou senha incorretos(s)'); </script>");
    print ("<script>location.href='/login'; </script>");
}