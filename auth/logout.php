<?php
session_save_path('/session');
session_start();
unset($_SESSION["nome_completo"]);
unset($_SESSION["email"]);
unset($_SESSION["telefone"]);
unset($_SESSION["id"]);
session_destroy();
echo "<script>alert('usuario deslogado com sucesso');</script>";
echo "<script>location.href='/';</script>";
exit;
