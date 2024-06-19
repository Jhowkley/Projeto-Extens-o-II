<?php
include dirname(__FILE__) . '/../../database/config.php';

if (isset($_POST['primeiro-nome'], $_POST['email'], $_POST['ultimo-nome'], $_POST['pass'])) {
    $foto;
    if (isset($_FILES['foto']['name']) && $_FILES["foto"]["error"] == 0) {

        $nomeArquivo = $_FILES['foto']['name'];
        $tipoArquivo = $_FILES['foto']['type'];
        $nomeTemporário = $_FILES['foto']['tmp_name'];
        $tamanho = $_FILES['foto']['size'];
        $erros = array();
        $limitSize = 1024 * 1024 * 5;
        $extensoesPermitidas = ["jpg", "jpeg", "png"];
        $typesPermitidas = ["image/jpg", "image/jpeg", "image/png"];
        $extensaoArquivo = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

        if ($tamanho > $limitSize) {
            $erros[] = "Sua foto execede o tamanho máximo.<br>";
        }
        if (!in_array($extensaoArquivo, $extensoesPermitidas)) {
            $erros[] = "Tipo de arquivo não permitido.<br>";
        }
        if (!in_array($tipoArquivo, $typesPermitidas)) {
            $erros[] = "Tipo de arquivo não permitido.<br>";
        }
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                print 'alert($erro)';
            }
        } else {
            $destino = dirname(__FILE__) . "/../../assets/images/profileImages/";
            $novoNome = $destino . $_POST['primeiro-nome'] . '.' . $extensaoArquivo;
            $foto = $_POST['primeiro-nome'] . '.' . $extensaoArquivo;
            if (move_uploaded_file($nomeTemporário, $novoNome)) {
            }
        }
    }

    $primeiro_nome = $_POST['primeiro-nome'];
    $ultimo_nome = $_POST['ultimo-nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];
    $data_nascimento = $_POST['dt-nasc'];
    $foto_url = $foto ? $foto : '';

    $sql = "INSERT INTO users (primeiro_nome, ultimo_nome, email, senha, tipo, data_nascimento, foto)
                        values('$primeiro_nome', '$ultimo_nome', '$email', '$senha', '$tipo', '$data_nascimento', '$foto_url')";
    $conn->query($sql);
    echo "<script>location.href='/login';</script>";
    exit;
}

include __DIR__ . '/form_cad_user.html';
