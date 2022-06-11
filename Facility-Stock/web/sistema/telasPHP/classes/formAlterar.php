<?php

class formAlterar
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

    public static function alterar($nome, $descricao, $valor, $qtd, $id)
    {
        $sql = Mysql::conectar()->prepare("UPDATE produtos SET nome = ?, descricao = ?, valor = ?, qtd = ? WHERE id = ?");
        $sql->execute(array($nome, $descricao, $valor, $qtd, $id));
    }
}
