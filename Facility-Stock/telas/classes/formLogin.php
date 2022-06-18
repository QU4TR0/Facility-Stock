<?php

    class formLogin{

        public static function alert($tipo, $mensagem){
            if($tipo == 'erro'){
                echo '<div style="color: green;">'.$mensagem.'</div>';
                return false;
            } else if($tipo == 'sucesso'){
                echo '<div style="color: red;">'.$mensagem.'</div>';
                return true;
            }
        }

        public static function login($email, $senha){
         $sql = Mysql::conectar()->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
         $sql ->execute(array($email, $senha));   
        }
    }

?>