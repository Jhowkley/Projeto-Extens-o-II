<?php
include dirname(__FILE__) . '/../../database/config.php';

if (isset($_POST['nome_completo'], $_POST['email'], $_POST['senha'])) {

    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];
    // $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO user (nome_completo, email, senha, telefone)
                        values('$nome_completo', '$email', '$senha', '$telefone')";
    $conn->query($sql);
    echo "<script>location.href='/login';</script>";
    exit;
}

include __DIR__ . '/form_cad_user.html';
