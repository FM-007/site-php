<section class="banner-container">
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/ft-banner.jpeg');" class="banner-single"></div><!-- banner-single -->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/banner2.jpg');" class="banner-single"></div><!-- banner-single -->
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/banner3.jpeg');" class="banner-single"></div><!-- banner-single -->
        <div class="overlay"></div><!--OVERLAY-->
        <div class="center">
            
            <form method="POST">
                <h2>Qual seu melhor e-mail?</h2>
                <input type="email" name="email" required />
                <input type="hidden" name="identificador" value="form_home">
                <input type="submit" name="acao" value="Cadastrar!"/>
            </form>
        </div><!--CENTER-->
        <div class="bullets"></div><!--bullets-->
    </section><!-- banner-container -->

    <section class="descricao-autor">
        <div class="center">

            <div class="w50 left">
                <h2>Felipe Moreira</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare at nisl a facilisis.
                Nullam ut justo sed sem condimentum consequat a in ipsum.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam. 
                Ut efficitur dolor mauris, id sollicitudin est rhoncus a. Donec eget dolor lacus. 
                Fusce ac venenatis neque, id congue nisl. Phasellus efficitur laoreet purus vitae malesuada. 
                Sed finibus diam bibendum hendrerit aliquet. Nunc sit amet condimentum tortor.
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare at nisl a facilisis.
                Nullam ut justo sed sem condimentum consequat a in ipsum.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam. 
                Ut efficitur dolor mauris, id sollicitudin est rhoncus a. Donec eget dolor lacus. 
                Fusce ac venenatis neque, id congue nisl. Phasellus efficitur laoreet purus vitae malesuada. 
                Sed finibus diam bibendum hendrerit aliquet. Nunc sit amet condimentum tortor.
                </p>
            </div><!--w50-->
            
            <div class="w50 left">
                <img class="right" src="<?php echo INCLUDE_PATH;?>img/foto1.jpg" alt="Foto do Autor">
            </div><!--W50-->
            <div class="clear"></div>
        </div><!--CENTER-->
    </section><!--DESCRIÇÃO AUTOR-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>

            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare at nisl a facilisis.
                    Nullam ut justo sed sem condimentum consequat a in ipsum.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                    cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam. 
                </p>
            </div><!--BOX-ESPECIALIDADE-->

            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>HTML5</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare at nisl a facilisis.
                    Nullam ut justo sed sem condimentum consequat a in ipsum.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                    cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam. 
                </p>
            </div><!--BOX-ESPECIALIDADE-->

            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-gg-circle" aria-hidden="true"></i></h3>
                <h4>JavaScript</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare at nisl a facilisis.
                    Nullam ut justo sed sem condimentum consequat a in ipsum.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                    cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam. 
                </p>
            </div><!--BOX-ESPECIALIDADE-->
            
        </div><!--CENTER-->
        <div class="clear"></div>
    </section><!--ESPECIALIDADES-->
    
    <section class="extras">
        <div class="center">
            <div id="depoimentos" class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec ornare at nisl a facilisis.
                        Nullam ut justo sed sem condimentum consequat a in ipsum..."
                    </p><!--DEPOIMENTO-DESCRICAO-->
                    <p class="nome-autor">
                        Lorem ipsum
                    </p><!--NOME-AUTOR-->
                </div><!--DEPOIMENTO-SINGLE-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec ornare at nisl a facilisis.
                        Nullam ut justo sed sem condimentum consequat a in ipsum..."
                    </p><!--DEPOIMENTO-DESCRICAO-->
                    <p class="nome-autor">
                        Lorem ipsum
                    </p><!--NOME-AUTOR-->
                </div><!--DEPOIMENTO-SINGLE-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec ornare at nisl a facilisis.
                        Nullam ut justo sed sem condimentum consequat a in ipsum..."
                    </p><!--DEPOIMENTO-DESCRICAO-->
                    <p class="nome-autor">
                        Lorem ipsum
                    </p><!--NOME-AUTOR-->
                </div><!--DEPOIMENTO-SINGLE-->
            </div><!--W50-->
            <div id="servicos" class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Donec ornare at nisl a facilisis.
                            Nullam ut justo sed sem condimentum consequat a in ipsum.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                            cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Donec ornare at nisl a facilisis.
                            Nullam ut justo sed sem condimentum consequat a in ipsum.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                            cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Donec ornare at nisl a facilisis.
                            Nullam ut justo sed sem condimentum consequat a in ipsum.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                            cubilia curae; Donec ac ultrices nibh. Sed eget maximus ligula. Morbi eget eleifend quam.
                        </li>
                    </ul>
                </div><!--SERVICOS-->
            </div><!--W50-->
            <div class="clear"></div>
        </div><!--CENTER-->
    </section><!--EXTRAS-->
    