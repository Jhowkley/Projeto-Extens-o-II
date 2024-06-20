<?php
include dirname(__FILE__) . '/../database/config.php';

if (isset($_POST['status'], $_POST['email'], $_POST['tipo'], $_POST['descricao'])) {

    $status = $_POST['status'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO item (status_item, tipo_objeto, email, descricao)
                        values('$status', '$tipo', '$email', '$descricao')";
    $conn->query($sql);
    echo "<script>alert('Item registrado com sucesso');</script>";
    echo "<script>location.href='/';</script>";
    exit;
}

include __DIR__ . '/../includes/form_item.html';
