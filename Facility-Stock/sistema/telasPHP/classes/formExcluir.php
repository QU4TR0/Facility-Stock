<?php

    class formExcluir{

        public static function alert($tipo, $mensagem){
            if($tipo == 'erro'){
                echo '<div style="color: red;">'.$mensagem.'</div>';
                return true;
            } else if($tipo == 'sucesso'){
                echo '<div style="color: green;">'.$mensagem.'</div>';
                return false;
            }
        }

        public static function excluir($id){
         $sql = Mysql::conectar()->prepare("DELETE FROM produtos WHERE id = ?");
         $sql ->execute(array($id));
        }
    }

?>