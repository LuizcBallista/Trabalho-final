<?php
	require_once 'Utils.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compra de jogos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<section class="section">
    <div class="container">
		<?php
			Utils::renderProductCards();
		?>
    </div>
</section>

<button class="button is-floating is-link btnAbrirCarrinho">
    <span class="icon mdi mdi-cart-variant"></span>
</button>

<div class="modal" id="modalCarrinho">
	<div class="modal-background"></div>
	<div class="modal-card">
		<header class="modal-card-head">
			<p class="modal-card-title">Seu Carrinho</p>
			<button class="delete" aria-label="close"></button>
		</header>
		<section class="modal-card-body" id="bodyModalCarrinho"></section>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="modal.js"></script>
<script src="carrinho.js"></script>
</body>
</html>