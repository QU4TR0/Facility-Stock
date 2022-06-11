<?php
include('config.php');
Mysql::conectar();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Facility Stock - Alterar Produtos</title>
</head>

<body>
    <img src="../img/TelaCadastro.png">
    <form method="get" action="#" class="cadastro">
        <div class="conteudos">
            <h3>Alterar Produtos</h3>
            <p>
                <label for="id">Id do Produto:</label>
                <input type="number" name="id" id="id" placeholder="Código do Material" class="inputId">
                <input type="submit" name="acao" value="Buscar" class="botaoId">
                <?php
                if ($resultado = isset(($_GET['id']))) {
                    $id = addslashes($_GET['id']);

                    if ($id == '') {
                        formBuscar::alert('erro', 'O ID ficou vazio!');
                    } else {
                        formBuscar::buscar($id);
                        formBuscar::alert('sucesso', 'Produto ' . $id . ' encontrado com sucesso!');
                ?>
            </p>
    </form>
    <form method="post" action="#">
        <p>
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        </p>
        <p>
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Material" class="input">
        </p>
        <p>
            <label for="descricao"> Descrição do Material: </label><br>
            <input type="text" name="descricao" placeholder="Descrição do Material" size="30" maxlength="70" id="descricao" class="input">
        </p>
        <p>
            <label for="valor"> Valor: </label><br>
            <input type="text" name="valor" id="valor" placeholder="Valor" class="input">
        </p>
        <p>
            <label for="qtd"> Quantidade: </label><br>
            <input type="text" name="qtd" id="qtd" placeholder="Quantidade" class="input">
        </p>
        <p class="botaoposition">
            <input type="submit" name="acao" value="Alterar" class="botao">
        </p>
        <?php
                        if (isset(($_POST['id']))) {
                            $id = addslashes($_POST['id']);
                            $qtd = addslashes($_POST['qtd']);
                            $nome = addslashes($_POST['nome']);
                            $descricao = addslashes($_POST['descricao']);
                            $valor = addslashes($_POST['valor']);

                            if ($nome == '') {
                                formAlterar::alert('erro', 'O Nome ficou vazio!');
                            } else {
                                formAlterar::alterar($nome, $descricao, $valor, $qtd, $id);
                                formAlterar::alert('sucesso', 'Produto ' . $nome . ' alterado com sucesso!');
                            }
                        }
        ?>
    </form>
    </div>
<?php
                    }
                }
?>
</body>

</html>