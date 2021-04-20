<?php

    if(isset($_COOKIE['lembrar']))
    {
        $user = $_COOKIE['user'];
        $password = $_COOKIE['password'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
        $sql->execute(array($user, $password));

        if($sql->rowCount() == 1)
        {
            $info = $sql->fetch();//Busca o resutado de uma coluna...
            //Logado com sucesso...
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['cargo'] = $info['cargo'];//Recebendo as informações da coluna cargo...
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['img'] = $info['img'];
            header('Location: '.INCLUDE_PATH_PAINEL);
            die();
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"/>
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body> 
    <div class="box-login">
        <?php
            // Criando conexão com o banco de dados... 
            if (isset($_POST['acao'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user, $password));
                
                if ($sql->rowCount() == 1) {  //Verificando se existe usuario cadastrado no banco de dados...
                    $info = $sql->fetch();//Busca o resutado de uma coluna...
                    //Logado com sucesso...
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $user;
                    $_SESSION['password'] = $password;
                    $_SESSION['cargo'] = $info['cargo'];//Recebendo as informações da coluna cargo...
                    $_SESSION['nome'] = $info['nome'];
                    $_SESSION['img'] = $info['img'];

                    if(isset($_POST['lembrar']))
                    {
                        setcookie('lembrar', true, time()+(60*60*24), '/');
                        setcookie('user', $user, time()+(60*60*24), '/');
                        setcookie('password', $password, time()+(60*60*24), '/');
                    }

                    header('Location: '.INCLUDE_PATH_PAINEL);
                    die();
                } else {
                    //Falhou...
                    echo '<div class="erro-box">Usuário ou senha incorretos</div>';
                }
            }
            
        ?>
        <h2>Efetue Login:</h2>
        <form method="POST">
            <input type="text" name="user" placeholder="Login..." required>
            <input type="password" name="password" placeholder="Senha..." required>
            <div class="form-group-login left">
                <input type="submit" name="acao" value="Logar">
            </div>
            <div class="form-group-login right">
                <label>Lembrar-me</label>
                <input type="checkbox" name="lembrar"/>
            </div>
            <div class="clear"></div>
        </form>
    </div><!--box-login-->
</body>
</html>