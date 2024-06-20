<?php
include dirname(__FILE__) . '/../database/config.php';

if (isset($_POST['status'], $_POST['tipo'], $_POST['descricao'])) {
    $status = $_POST['status'];
    $tipo = $_POST['tipo'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO item (status_item, tipo_objeto, descricao)
                        values('$status', '$tipo', '$descricao')";
    $conn->query($sql);
    echo "<script>alert('Item registrado com sucesso');</script>";
    echo "<script>location.href='/';</script>";
    exit;
}

include __DIR__ . '/../includes/form_item.html';
