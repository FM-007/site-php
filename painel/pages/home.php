<?php
    $userOnline = Painel::listarUsuariosOline();
    $visitasTotais = Painel::totalVisitaSite();
    $visitasHoje = Painel::visitasHoje();
?>
<div class="box-content w100">
    <h2 cla><i class="fa fa-home"></i>Painel de Controle - <?php echo NOME_EMPRESA;?></h2><br/>
    <div class="box-metrica-single w33 left">
        <div class="box-metrica-wraper">
            <h2>Usuario Online</h2>
            <p><?php echo count($userOnline); ?></p>
        </div><!--box-metrica-wraper-->
    </div><!--box-metrica-single-->
    <div class="box-metrica-single w33 left">
        <div class="box-metrica-wraper">
            <h2>Total de visitas</h2>
            <p><?php echo $visitasTotais; ?></p>
        </div><!--box-metrica-wraper-->
    </div><!--box-metrica-single-->
    <div class="box-metrica-single w33 left">
        <div class="box-metrica-wraper">
            <h2>Visitas Hoje</h2>
            <p><?php echo $visitasHoje; ?></p>
        </div><!--box-metrica-wraper-->
    </div><!--box-metrica-single-->
    <div class="clear"></div>
</div><!--box-content-->

<div class="box-content w100">
    <h2><i class="fa fa-globe"></i>Usuarios Online - <?php echo NOME_EMPRESA;?></h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div><!--col-->
            <div class="col">
                <span>Ultima Ação</span>
            </div><!--col-->
            <div class="clear"></div>
        </div><!--row-->
        <div class="row">
            <?php 

                foreach ($userOnline as $key => $value) {
                  
            ?>
            <div class="col line">
                <span><?php echo $value['ip']; ?></span>
            </div><!--col-->
            <div class="col line">
                <span><?php echo date('d-m-Y H:i:s',strtotime($value['ultima_acao'])); ?></span>
            </div><!--col-->
            <div class="clear"></div>

            <?php
             
                }

            ?>
        </div><!--row-->
    </div><!--table-responsive-->
</div><!--box-content-->

<div class="box-content w100">
    <h2><i class="fa fa-globe"></i>Usuarios do Painel - <?php echo NOME_EMPRESA;?></h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col-user w33">
                <span>Nome</span>
            </div><!--col-->
            <div class="col-user w33">
                <span>Usuario</span>
            </div><!--col-->
            <div class="col-user w33">
                <span>Cargo</span>
            </div><!--col-->
            <div class="clear"></div>
        </div><!--row-->
        <div class="row">
            <?php 

                $usuariosPainel = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`");
                $usuariosPainel->execute();
                $usuariosPainel = $usuariosPainel->fetchAll();
                foreach ($usuariosPainel as $key => $value) {
                  
            ?>
            <div class="col-user line-user">
                <span><?php echo $value['nome']; ?></span>
            </div><!--col-->
            <div class="col-user line-user">
                <span><?php echo $value['user']; ?></span>
            </div><!--col-->
            <div class="col-user line-user">
                <span><?php echo Painel::pegaCargo($value['cargo']);?></span>
            </div><!--col-->
            <div class="clear"></div>

            <?php
             
                }

            ?>
        </div><!--row-->
    </div><!--table-responsive-->
</div><!--box-content-->

