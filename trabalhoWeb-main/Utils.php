<?php

require_once 'Database.php';

class Utils
{
	public static function renderProductCards()
	{
		$db = new Database();
		$produtos = $db->read('produtos');
		$htmlCard = '';

		echo '<div class="columns">';
		foreach ($produtos as $index => $produto) {
			if ($index === 3) {
				echo '</div>';
				echo '<div class="columns">';
			}
			$whereImagem = 'produto_id = ' . $produto['id'];
			$imagens = $db->read('produtos_midia', 'arquivo', '', $whereImagem);
			if ($index % 3 === 2) {
				echo '<div class="columns">';
			}
			$htmlCard = '<div class="column">
				<div class="card">
					<div class="card-image">
						<figure class="image is-16by9">
							<img src="images/'.$imagens[0]['arquivo'].'" alt="Placeholder image">
						</figure>
					</div>
					<div class="card-content">
						<div class="content">
							<h1>'.$produto['nome'].'</h1>
							<br>
							<span class="button is-rounded is-pulled-left">Valor: R$'.number_format($produto['valor'], 2, ',', '.').'</span>
							<button class="button is-success is-rounded	js-modal-trigger" data-target="modalProduto'.$produto['id'].'">
								<span class="mdi mdi-information-outline icon is-left"></span>
							</button>
							<button class="button is-success is-rounded is-pulled-right btnCarrinho" data-id="'.$produto['id'].'" id="btnCarrinhoProduto'.$produto['id'].'">
								<span class="mdi mdi-cart-plus icon is-left"></span>
							</button>
						</div>
					</div>
				</div>
			</div>';
			$htmlModal = '
				<div class="modal" id="modalProduto'.$produto['id'].'">
					<div class="modal-background"></div>
					<div class="modal-card">
						<header class="modal-card-head">
							<p class="modal-card-title">'.$produto['nome'].'</p>
							<button class="delete" aria-label="close"></button>
						</header>
						<section class="modal-card-body">
							<span>'.$produto['descricao'].'</span>
						</section>
					</div>
				</div>
			';
			echo $htmlCard;
			if ($index === 2) {
				echo '</div>';
			}
			echo $htmlModal;
		}
	}

	public static function getUsuarioSessao()
	{
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}

		return $_SESSION['userId'];
	}
}