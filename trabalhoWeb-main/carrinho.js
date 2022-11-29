$('.btnCarrinho').on('click', function (element) {
	let request = $.ajax({
		type: 'POST',
		url: 'addCarrinho.php',
		data: {
			produtoId: $(this).data('id')
		}
	});
});

$(document).on('click','.btnRemoverItemCarrinho', function (element) {
	$.ajax({
		type: 'POST',
		url: 'removeItensCarrinho.php',
		data: {
			id: $(this).data('id')
		}
	});
	for (let element of $(this).parents()) {
		console.log(element.classList);
		if ($(element).hasClass('card') && $(element).hasClass('cardCarrinho')) {
			$(element).remove();
		}
	}
});

$('.btnAbrirCarrinho').on('click', function (element) {
	let requestItensCarrinho = $.ajax({
		type: 'GET',
		url: 'getItensCarrinho.php'
	});
	requestItensCarrinho.done(function (response) {
		let html = '';
		for (let item of JSON.parse(response)) {
			html += '<div class="card cardCarrinho">' +
				'<div class="card-image">' +
				'<figure class="image is-16by9">' +
				'<img src="images/'+item.capa+'" alt="Placeholder image">' +
				'</figure>' +
				'</div>' +
				'<div class="card-content">' +
				'<div class="content">' +
				'<h1>'+item.nome+'</h1>' +
				'<br>' +
				'<span class="button is-rounded is-pulled-left">R$'+item.valor+'</span>' +
				'<button class="button is-danger is-rounded is-pulled-right btnRemoverItemCarrinho" data-id="'+item.id+'">' +
				'<span class="mdi mdi-cart-remove icon is-left"></span>' +
				'</button>' +
				'</div>' +
				'</div>' +
				'<br>' +
				'</div>';
		}
		$('#bodyModalCarrinho').html(html);
		$('#modalCarrinho').addClass('is-active');
	});
});