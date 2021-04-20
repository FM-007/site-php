<div class="box-content">
    <h2><i class="fa fa-pencil"></i>  Editar Usuario</h2>

    <form method="POST" enctype="multipart/form-data">

        <?php

            if (isset($_POST['acao'])) 
            {
                //Enviei meu formulario...
                $nome = $_POST['nome'];
                $senha = $_POST['password'];
                $imagem = $_FILES['imagem'];
                $imagem_atual = $_POST['imagem_atual'];
                $usuario = new Usuario();
                
                if ($imagem['name'] != '')
                {
                    Painel::deleteFile($imagem_atual);
                    $imagem = Painel::atualizarFile($imagem);
                    if ($usuario->atualizarUsuarios($nome, $senha, $imagem))
                    {
                        $_SESSION['img'] = $imagem;
                        Painel::alert('sucesso', 'Usuario atualizado com sucesso com imagem!!!');
                    }
                    else
                    {
                        Painel::alert('erro', 'Erro ao atualizar usuario com imagem!!!');
                    }
                    
                }
                else
                {
                    $imagem = $imagem_atual;
                    if ($usuario->atualizarUsuarios($nome, $senha, $imagem))
                    {
                        Painel::alert('sucesso', 'Usuario atualizado com sucesso !!!');
                    }
                    else
                    {
                        Painel::alert('erro', 'Erro ao atualizar usuario !!!');
                    }
                }
            }

        ?>
    
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $_SESSION['nome'];?>" require/>
        </div><!--form-group-->
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="password"  value="<?php echo $_SESSION['password'];?>" require/>
        </div><!--form-group-->
        <div class="form-group">
            <label>Imagem:</label>
            <input type="file" name="imagem"/>
            <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img']; ?>">
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar"/>
        </div><!--form-group-->
    
    </form>
</div><!--box-content-->