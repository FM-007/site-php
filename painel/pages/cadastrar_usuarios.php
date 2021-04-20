<?php 

    Painel::verificaPermissaoPagina(2);
    Painel::$cargos;
    
?>
<div class="box-content">
    <h2><i class="fa fa-pencil"></i>  Cadastrar Usuario</h2>

    <form method="POST" enctype="multipart/form-data">

        <?php
        
            if(isset($_POST['acao']))
            {
                $nome = $_POST['nome'];
                $senha = $_POST['password'];
                $login = $_POST['login'];
                $imagem = $_FILES['imagem'];
                $cargo = $_POST['cargo'];
                $usuario = new Usuario();
                
                if ($login == '')
                {
                    Painel::alert('erro', 'O campo login esta vazio.');
                }
                elseif($nome == '')
                {
                    Painel::alert('erro', 'O campo nome esta vazio.');
                }
                elseif($senha == '')
                {
                    Painel::alert('erro', 'O campo senha esta vazio.');
                }
                elseif($cargo == '')
                {
                    Painel::alert('erro', 'Selecione um cargo.');
                }
                elseif($imagem['name'] == '')
                {
                    Painel::alert('erro', 'Selecione uma imagem.');
                }
                else
                {
                    
                    if($cargo >= $_SESSION['cargo'])
                    {
                        Painel::alert('erro', 'O cargo deve ser inferior ao cargo do usuario atual.');
                    }
                    elseif(Usuario::usuarioExiste($login))
                    {
                        Painel::alert('erro', 'Este login ja existe, por gentileza cadastrar outro login.');
                    }
                    else
                    {
                        $imagem = Painel::atualizarFile($imagem);
                        $usuario->cadastrarUsuario($login, $senha, $imagem, $nome, $cargo);
                        Painel::alert('sucesso', 'Usuario cadastrado com sucesso.');
                    }
                }
            }
        ?>
    
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome"/>
        </div><!--form-group-->
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="password"/>
        </div><!--form-group-->
        <div class="form-group">
            <label>Login:</label>
            <input type="text" name="login"/>
        </div><!--form-group-->
        <div class="form-group">
            <label>Cargo: </label>
            <select name="cargo">
                <?php

                    foreach (Painel::$cargos as $key => $value) 
                    {
                        //Permite cadastrar apenas cargos menores...
                        if($key < $_SESSION['cargo'])
                        {
                            echo '<option value="'.$key.'">'.$value.'</option>';
                        }
                    }

                ?>
            </select>
        </div><!--form-group-->
        <div class="form-group">
            <label>Imagem:</label>
            <input type="file" name="imagem"/>
        </div><!--form-group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Cadastrar"/>
        </div><!--form-group-->
    
    </form>
</div><!--box-content-->