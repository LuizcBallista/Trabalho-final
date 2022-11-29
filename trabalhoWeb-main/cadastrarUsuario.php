<?php

require_once('Database.php');

if (empty($_POST)) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
}

$db = new Database();
$login = $_POST['login'];
$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
$nome = $_POST['nome'];
$email = $_POST['email'];
$dataNascimento = $_POST['dataNascimento'];

$camposInsert = [
    'login' => $login,
    'senha' => $senha,
    'nome' => $nome,
    'email' => $email,
    'data_nascimento' => $dataNascimento
];

try {
    $db->create('usuarios', $camposInsert);
    header('Location: index.php');
} catch (Exception $e) {
    return [
        'type' => 'error',
        'message' => 'Houve um erro ao cadastrar o usuário. Verifique os dados e tente novamente.'
    ];
}