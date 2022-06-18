<?php

class formContato
{

    public static function alert($tipo, $mensagem)
    {
        if ($tipo == 'sucesso') {
            echo '<div style="color: green;">' . $mensagem . '</div>';
            return true;
        } else if ($tipo == 'erro') {
            echo '<div style="color: red;">' . $mensagem . '</div>';
            return false;
        }
    }

    public static function contato($email, $nome, $telefone, $msg)
    {
        $sql = Mysql::conectar()->prepare("INSERT INTO contato VALUES (?,?,?,?)");
        $sql->execute(array($email, $nome, $telefone, $msg));
    }
}
