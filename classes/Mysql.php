<?php

    class MySql 
    {

        private static $pdo;
        
        public static function conectar() {
            if (self::$pdo == null){ //Verifica se meu objeto de conexão é nulo...
                //Código para conectar ao banco de dados...
                try {
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                } catch (Exception $e) {
                    echo 'Erro ao se conectar com<strong> banco de dados...</strong>';
                }
            }

            return self::$pdo;

        }

    }

?>