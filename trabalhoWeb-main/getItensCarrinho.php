<?php

require_once 'Utils.php';
require_once 'Database.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$userId = Utils::getUsuarioSessao();

$db = new Database();

$itens = $db->read(
	'carrinho_itens itens',
	'itens.id, itens.produto_id, p.nome, itens.valor',
	'JOIN produtos p ON p.id = itens.produto_id',
	'usuario_id = :usuario_id',
	[':usuario_id' => $userId]
);

$htmlItens = "";

foreach ($itens as $index => $item) {
	$imgCapa = $db->read(
		'produtos_midia pm',
		'arquivo',
		'',
		'produto_id = :produto_id AND arquivo LIKE \'%capa%\'',
		[':produto_id' => $item['produto_id']],
	'',
		false
	)['arquivo'];
	$itens[$index]['capa'] = $imgCapa;
	$itens[$index]['valor'] = number_format($item['valor'], 2, ',', '.');
}

echo json_encode($itens);