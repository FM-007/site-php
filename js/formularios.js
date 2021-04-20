$(function(){
	/*$('form').submit(function(){
		alert('Email enviado com sucesso...');
		return false;
	})*/


	$('body').on('submit', 'form', function(){
		var form = $(this);
		$.ajax({
			beforeSend: function(){
				$('overlay-loading').fadeIn();
			},
			url: include_path+'ajax/formularios.php',
			method: 'post',
			dataType: 'json',
			data: form.serialize()
		}).done(function(data){
			if (data.retorno) {
				$('overlay-loading').fadeOut();
				$('.sucesso').fadeIn();
				setTimeout(function(){
					$('.sucesso').fadeOut();
				}, 3000)
			} else {
				$('overlay-loading').fadeOut();
			}
		});
	})
})