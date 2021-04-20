$(function() {
    //Efeito do menu mobile, abertura e fechamento do menu...
    $('nav.mobile').click(function() {
        var listaMenu = $('nav.mobile ul');

        if (listaMenu.is(':hidden') == true) {
            
            var icone = $('.botao-menu-mobile').find('i');
            
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');

            listaMenu.slideToggle();
        }
        else {

            var icone = $('.botao-menu-mobile').find('i');
            
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');

            listaMenu.slideToggle();
        }
    });
    //Rolagem scroll da barra de rolagem...
    if($('target').length > 0){
		//O elemento existe, portanto precisamos dar o scroll em algum elemento.
		var elemento = '#'+$('target').attr('target');
		
		var divScroll = $(elemento).offset().top;

		$('html,body').animate({scrollTop:divScroll},2000);
    }
    
    
    carregarDinamico();
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('.container-principal').hide();
			$('.container-principal').load(include_path+'pages/'+pagina+'.php');
			
			setTimeout(function(){
				initialize();
	            addMarker(-23.674650,-46.603140,'',"Minha casa",undefined,false);
            },1000);
                        
			$('.container-principal').fadeIn(1000);
            window.history.pushState('', '',pagina);
            
			return false;
		})
	}
})