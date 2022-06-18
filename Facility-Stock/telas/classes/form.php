<?php

    class form{

        public static function alert($tipo, $mensagem){
            if($tipo == 'erro'){
                echo '<div style="color: green;">'.$mensagem.'</div>';
                return false;
            } else if($tipo == 'sucesso'){
                echo '<div style="color: red;">'.$mensagem.'</div>';
                return true;
            }
        }

        public static function cadastrar($id, $nome, $descricao, $valor, $qtd){
         $sql = Mysql::conectar()->prepare("INSERT INTO produtos VALUES (?,?,?,?,?)");
         $sql ->execute(array($id, $nome, $descricao, $valor, $qtd));   
        }
    }

?>