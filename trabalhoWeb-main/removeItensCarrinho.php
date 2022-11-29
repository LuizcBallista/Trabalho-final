<?php

require_once 'Utils.php';
require_once 'Database.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}

$db = new Database();

$db->delete('carrinho_itens', 'id = :id', [':id' => $_POST['id']]);