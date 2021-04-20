$(function(){
    
    var curSlide = 0;

    var delay = 3;

    var maxSlide = $('.banner-single').length -1;

    initiSlide();
    changeSlide();

    function initiSlide(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();

        //Script para controle de slides...
        for(var i = 0; i < maxSlide +1; i++){
            var content = $('.bullets').html();
            if(i == 0) {
                content+='<span class="active-slider"></span>';
            }else{
                content+='<span></span>';
            }
            
            $('.bullets').html(content);
        }
    }
    //Função para trocar o slider...
    function changeSlide(){
        setInterval(function(){
            $('.banner-single').eq(curSlide).stop().fadeOut(2000);
            curSlide++;
            if (curSlide > maxSlide) {
                curSlide = 0;
            }
            $('.banner-single').eq(curSlide).stop().fadeIn(2000);
            //Trocar bullets da navegação do slider...
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(curSlide).addClass('active-slider');
        },delay * 1000);
    }

    //Controle da navegação do slider por click....
    $('body').on('click','.bullets span',function(){
        var currentBullets = $(this);
        $('.banner-single').eq(curSlide).stop().fadeOut(1000);
        curSlide = currentBullets.index();
        $('.banner-single').eq(curSlide).stop().fadeIn(1000);
        $('.bullets span').removeClass('active-slider');
        currentBullets.addClass('active-slider');
    })
})