<?php

class formBuscar
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

    public static function buscar($id)
    {
        $sql = Mysql::conectar()->prepare("SELECT * FROM produtos WHERE id = ?");
        $sql->execute(array($id));
    }
}
