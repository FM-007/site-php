$(function(){
    
    var open = true;
    var windowSize = $(window)[0].innerWidth;//Declarei uma variavel, cujo valor é o tamanho real da minha janela...

    var targetSizeWindow = (windowSize <= 400) ? 200 : 300;

    if (windowSize <= 768) {
        $('.menu').css('width','0');
        $('.menu').css('padding','0');
        open = false;
    }

    $('.menu-btn').click(function(){
        if (open) {
            //O menu esta aberto, preciso fechar e adaptar o conteudo geral do painel...
            $('.menu').animate({'width':0, 'padding':0}, function(){//Esconde a barra de menu lateral do painel...
                open = false;
            });
            $('.content, header').css('width','100%');
            $('.content, header').animate({'left':0}, function(){
                open = false;
            });
            
        } else {
            //O menu esta fechado...
            $('.menu').css('display','block');
            $('.menu').animate({'width': targetSizeWindow+'px', 'padding':'10px'}, function(){//Mostra a barra de menu lateral do painel...
                open = true;
            });
            //$('.content, header').css('width','calc(300px - 100%)');
            $('.content, header').animate({'left': targetSizeWindow+'px', 'width':'1240px'}, function(){
                open = true;
            });
            
            //função para corrigir o design responsivo...
            $(window).resize(function(){
                windowSize = $(window)[0].innerWidth;
                if (windowSize <= 768) {
                    $('.menu').css('width','0').css('padding','0');
                    $('.content, header').css('width','100%').css('left','0');
                    open = false;
                } else {
                    open = true;
                    $('.menu').css('width','250px').css('padding','10px 0');
                    $('.content, header').css('width','calc(100% - 250px)').css('left','250px');
                }
            })
        }
    })

})