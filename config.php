<?php
    session_start();//Função para iniciar uma sessão, sem ela não se pode usar $_SESSION
    date_default_timezone_set('America/Sao_Paulo');//Configurando data e hora local...
    //Função para carregar classes dinamicamente...
    $autoload = function($class)
    {
        if ($class == 'Email') 
        {
            require_once('classes/phpmailer/PHPMailerAutoload.php');
        };
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    //Constante com o nome da empresa...
    define('NOME_EMPRESA','Dev Sim!');

    //Direcionando para o diretório principal...
    define('INCLUDE_PATH','http://localhost/site-1/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

    //Busca o diretório atual e manda para o painel
    define('BASE_DIR_PAINEL', __DIR__.'/painel');
    
    //Constantes de conexão com banco de dados... da classe MySql...
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_devsim');  

?>