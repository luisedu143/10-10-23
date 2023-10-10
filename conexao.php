<?php
$txt_usuario = trim(@$_POST['txt_usuario']);
$txt_senha = md5(trim(@$_POST['txt_senha']));

@session_start();
$_SESSION['usuario'] = NULL;
$_SESSION['senha'] = NULL;
if ($txt_usuario && $txt_senha != '') {
    $_SESSION['usuario'] = $txt_usuario;
    $_SESSION['senha'] = $txt_senha;
}

$host = 'localhost';
if ($_SERVER['SERVER_NAME'] != 'localhost') {
    $host = 'otherhost.mysql.com';
}

$db = 'stopots';
$usuario = 'root';
$senha = '';

try {
    $conexao = mysqli_connect($host,$usuario,$senha);
    echo 'conexão bem sucedida. ';
} catch (exception $e) {
    die('não foi possivel conectar ao banco de dados, erro: ' . $e);
}


mysqli_select_db($conexao,$db);
?>