<?php

    if (isset($_GET['logout'])) {
        Painel::logout();
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"/>
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
    <title>Painel de Contole</title>
</head>
<body>

    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php
                    if (isset($_SESSION['img']) == '') {
                                        
                ?>
                <div class="avatar-usuario">
                    <i class="fa fa-user"></i>
                </div><!--avatar-usuario-->
                <?php
                    } else {
                ?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>"/>
                </div><!--imagem-usuario-->
                <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                </div><!--nome-usuario-->
                <div class="cargo">
                    <p><?php echo Painel::pegaCargo($_SESSION['cargo']); ?></p><!--Utilização da função pegaCargo para imprimir o cargo do usuario dinamicamente-->
                </div><!--cargo-->
            </div><!--box-usuario--><br>
            <div class="itens-menu">
                <h3>Cadastro</h3>
                <a <?php Painel::selecionarMenu('cadastrar_depoimentos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar_depoimentos">Cadastrar Depoimento</a>
                <a <?php Painel::selecionarMenu('cadastrar_servicos'); ?>href="">Cadastrar Serviço</a>
                <a <?php Painel::selecionarMenu('castrar_slides'); ?>href="">Cadastrar Slides</a>
                <h3>Gestão de Conteudo</h3>
                <a <?php Painel::selecionarMenu('listar_depoimentos'); ?>href="<?php INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                <a <?php Painel::selecionarMenu('listar_servicos'); ?>href="">Listar Serviços</a>
                <h3 <?php Painel::verificaPermissaoMenu(2);?>>Gestão de Usuários</h3>
                <a <?php Painel::selecionarMenu('cadastrar_usuarios'); ?><?php Painel::verificaPermissaoMenu(2);?>href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar_usuarios">Cadastrar Usuario</a>
                <a <?php Painel::selecionarMenu('editar_usuarios'); ?><?php Painel::verificaPermissaoMenu(2);?>href="<?php echo INCLUDE_PATH_PAINEL; ?>editar_usuarios">Editar Usuario</a>
                <h3>Configuração</h3>
                <a <?php Painel::selecionarMenu('editar'); ?>href="">Editar</a>
                <a <?php Painel::selecionarMenu('logout'); ?>href="<?php echo INCLUDE_PATH_PAINEL ?>?logout">Sair</a>
            </div><!--itens-menu-->
        </div><!--menu-wraper-->
    </div> <!--menu-->
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars" title="Menu"></i>
            </div><!--menu-btn-->
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?home"><i class="fa fa-home" title="Home"></i></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fa fa-external-link" title="Sair"></i></a>
            </div><!--logout-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>
    <div class="content">
        <?php
            Painel::carregarPagina();
        ?>
    </div><!--content-->
<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
    
</body>
</html>