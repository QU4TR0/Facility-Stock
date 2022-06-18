<?php
    
    class Mysql{
        private static $pdo;
        
        public static function conectar(){
            if (self::$pdo == null){
                try{
                    self::$pdo = new PDO("mysql:host=".HOST.";port=".PORT.";dbname=".DATABASE."",USER,PASSWORD); 
                    self::$pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    }catch(Exception $e){
                        echo '<h2>Erro ao conectar com o banco de dados :</h2>';
                    }
            }
            return self::$pdo;
        }
    }

?>