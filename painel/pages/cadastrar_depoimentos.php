<?php 

    Painel::$cargos;
    
?>
<div class="box-content">
    <h2><i class="fa fa-pencil"></i>  Cadastrar Usuario</h2>

    <form method="POST" enctype="multipart/form-data">

        <?php
        
            if(isset($_POST['acao']))
            {
                if(Painel::insert($_POST))
                {
                    Painel::alert('sucesso', 'Depoimento cadastrado com sucesso.');
                }
                else
                {
                    Painel::alert('erro', 'Campos vazios não são permitidos.');
                }
            }
        ?>
    
       <div class="form-group">
            <label>Nome da Pessoa:</label>
            <input type="text" name="nome"/>
        </div><!--form-group-->
        <div class="form-group">
            <label>Dpoimento:</label>
            <textarea name="depoiemento"></textarea>
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Cadastrar"/>
            <input type="hidden" name="nome_tabela" value="tb_admin.depoimentos">
        </div><!--form-group-->
    
    </form>
</div><!--box-content-->