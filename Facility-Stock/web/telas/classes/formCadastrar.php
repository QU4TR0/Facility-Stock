<?php

    class formCadastrar{

        public static function alert($tipo, $mensagem){
            if($tipo == 'sucesso'){
                echo '<div style="color: green;">'.$mensagem.'</div>';
                return true;
            } else if($tipo == 'erro'){
                echo '<div style="color: red;">'.$mensagem.'</div>';
                return false;
            }
        }

        public static function cadastrar($email, $nome, $sobrenome, $senha, $data){
         $sql = Mysql::conectar()->prepare("INSERT INTO usuarios VALUES (?,?,?,?,?)");
         $sql ->execute(array($email, $nome, $sobrenome, $senha, $data));   
        }
    }

?>