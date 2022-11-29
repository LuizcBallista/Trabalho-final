<?php

require_once 'Utils.php';
require_once 'Database.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$idProduto = $_POST['produtoId'];
$userId = Utils::getUsuarioSessao();

$db = new Database();

$valor = $db->read('produtos', 'valor', '', 'id = ' . $idProduto, [], '', false)['valor'];

$camposInsert = [
	'produto_id' => $idProduto,
	'usuario_id' => $userId,
	'valor' => $valor
];

$db->create('carrinho_itens', $camposInsert);