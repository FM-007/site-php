<?php
    //include('config.php/classe/'.$class.'.php');
    class Painel
    {
        // Verificando se existe uma sessão de login aberta...
        public static function logado() 
        {
            return isset($_SESSION['login']) ? true : false;
        }

        public static function logout() 
        {
            setcookie('lembrar', 'true', time()-1,'/');
            session_destroy(); //Destroi todas as sessões abertas...
            header('Location: '.INCLUDE_PATH_PAINEL);
        }

         //Variavel global
         public static $cargos = [
            '0' => 'Operacional',
            '1' => 'Auxiliar',
            '2' => 'Administrador'
        ];

        //Função para carregar cargos dinamicamente...
        public static function pegaCargo($index) 
        {
            return Painel::$cargos[$index];
        }

        //Função para carregar paginas do Painel dinamicamente...
        public static function carregarPagina() 
        {
            if (isset($_GET['url'])) 
            {
                $url = explode('/',$_GET['url']);
                if (file_exists('pages/'.$url[0].'.php')) 
                {
                    include('pages/'.$url[0].'.php');
                } 
                else 
                {
                    //Quando a pagina não existe, poderia ser uma pagina de erro...
                    header('Location: '.INCLUDE_PATH_PAINEL);
                }
            } 
            else 
            {
                include('pages/home.php');
            }
        }

        //Função para listar endereço de IP de usuarios online...
        public static function listarUsuariosOline()
        {
            self::limparUsuariosInativos();
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
            $sql->execute();
            return $sql->fetchAll();
        }

        public static function limparUsuariosInativos()
        {
            $date = date('Y-m-d H:i:s');
            $sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
        }

        //Função para fornecer o total de visitantes do site...
        public static function totalVisitaSite()
        {
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
            $sql->execute();
            $sql = $sql->rowCount();

            return $sql;
        }

        //Função para fornecer total de visitantes no dia atual...
        public static function visitasHoje()
        {
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
            $sql->execute(array(date('Y-m-d')));
            $sql = $sql->rowCount();

            return $sql;
        }

        //Função para enviar alerta ao enviar o formulario...
        public static function alert($tipo, $mensagem)
        {
            if ($tipo == 'sucesso') 
            {
                echo '<div class="box-alert sucesso"><i class="fa fa-check"></i> '.$mensagem.'</div>';
            }
            else if ($tipo == 'erro')
            {
                echo '<div class="box-alert erro"><i class="fa fa-times"></i> '.$mensagem.'</div>';
            }
        }

        /*Validar imagem do Usuario...
        public static function imagemValida($imagem)
        {
            if ($imagem['type'] == 'imagem/jpg' || $imagem['type'] == 'imagem/jpeg' || $imagem['type'] == 'imagem/png')
            {   
                $tamanho = intval($imagem['size'] / 1024);
                if ($tamanho < 780)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }*/

        //Atualizar Arquivos...
        public static function atualizarFile($file)
        {
            $formatoArquivo = explode('.', $file['name']);
            $imagemNome = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
            if (move_uploaded_file($file['tmp_name'], BASE_DIR_PAINEL.'/uploads/'.$file['name']))
            {
                return $file['name'];
            }
            else
            {
                return false;
            }
        }

        //Deletar a imagem atual ao atualizar a imagem do usuario...
        public static function deleteFile($file)
        {
            @unlink('uploads/'.$file);
        }

        //Função para dar efeito no campo do menu selecionada no painel
        public static function selecionarMenu($par)
        {
            $url = explode('/', @$_GET['url'])[0];
            if($url == $par)
            {
                echo 'class="menu-active"';
            }
        }

        public static function verificaPermissaoMenu($permissao)
        {
            if($_SESSION['cargo'] >= $permissao)
            {
                return;
            }
            else
            {
                echo 'style="display: none;"';
            }
        }

        public static function verificaPermissaoPagina($permissao)
        {
            if($_SESSION['cargo'] >= $permissao)
            {
                return;
            }
            else
            {
                include('../painel/pages/permissao_negada.php');
                die();
            }
        }   
        
        public static function insert($arr)
        {
            $certo = true;
            $nome_tabela = $arr['nome_tabela'];
            $query = "INSERT INTO `$nome_tabela` VALUES (null";
            foreach ($arr as $key => $value) {
                $nome = $key;
                $valor = $value;
                if($nome == 'acao' || $nome == 'nome_tabela')
                {
                    continue;
                }
                if($value == '')
                {
                    $certo = false;
                    break;
                }
                $query.=",?";
                $parametro[] = $value;
            }
            $query.=")";
            if($certo == true)
            {
                $sql = MySql::conectar()->prepare($query);
                $sql->execute($parametro);
            }
            return $certo;
        }
    }

?>