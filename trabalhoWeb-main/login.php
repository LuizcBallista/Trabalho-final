<?php

require_once 'Database.php';

if (empty($_POST)) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
}

$db = new Database();
$login = $_POST['login'];
$senha = $_POST['senha'];

$tabela = 'usuarios';
$campos = 'id, login, senha';
$where = 'login = :login';
$parametros = [
    ':login' => $login
];

$dadosUsuario = $db->read($tabela, $campos, '', $where, $parametros, '', false);

if (password_verify($senha, $dadosUsuario['senha'])) {
    session_start();
    $_SESSION['userId'] = $dadosUsuario['id'];
    header('Location: home.php');
}else{
    header('Location: index.php');
}