<?php include('config.php'); ?>
<?php Site::usuarioOline(); ?>
<?php Site::contador(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavra-chave, do, meu, site">
    <meta name="description" content="Descrição do meu web site">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"/>
    <link href="<?php echo INCLUDE_PATH;?>estilo/style.css" rel="stylesheet">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>img/fa-icon.ico" type="image/x-icon"/>
    <title>Primeiro Site</title>
</head>

<body>

    <base base="<?php echo INCLUDE_PATH;?>"/>
    <?php
        //Criando novas tag's....
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;

            case 'servicos':
                echo '<target target="servicos" />';
                break;
            
        }
    ?>
    <div class="sucesso">Formulário enviado com sucesso</div>
    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH; ?>img/ajax-loader.gif">
    </div><!-- overlay-loading-->
                
    <header>
        <div class="center">

            <div class="logo left"><a href="<?php echo INCLUDE_PATH;?>/"><?php echo NOME_EMPRESA?></a></div><!--Logo-->
            
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH;?>contato">Contatos</a></li>
                    
                </ul>
            </nav>

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>depoimentos">Depoimento</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH;?>contato">Contatos</a></li>
                    
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!--CENTER-->

    </header>
    <div class="container-principal">
        <?php
            //Verificando se existe paginas...
            if (file_exists('pages/'.$url.'.php')) {
                include('pages/'.$url.'.php');
            }else {
                if ($url != 'depoimentos' && $url != 'servicos') {
                    include('pages/404.php');

                }else {
                    include('pages/home.php');
                }
                
            };

        ?>

    </div><!-- container-principal -->
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--CENTER-->
    </footer>
    <script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/constent.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/map.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
    <?php
        if ($url == 'home' || $url == 'depoimentos' || $url == 'servicos' || $url == '') {
           
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slides.js"></script>
    
    <?php
        }
    ?>
    <?php 
    
        if($url == 'contato'){

    ?>    
    <?php
        }
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>