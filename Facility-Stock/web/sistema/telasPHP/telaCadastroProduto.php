<?php
    include ('config.php');
    Mysql::conectar();
?>
<html>

<head lang="pt-BR">
    <title>Cadastro de Materiais</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
</head>

<body>
    <img src="../img/TelaCadastro.png">
    <form method="post" action="#" class="cadastro">
        <div class="conteudos">
            <h3>Cadastrar Produtos</h3>
            <p>
                <label for="id"> ID do Material*: </label><br>
                <input type="number" name="id" id="id" placeholder="Código do Material" required class="input">
            </p>
            <p>
                <label for="nome"> Nome do Material*: </label><br>
                <input type="text" name="nome" placeholder="Nome do Material" size="50" maxlength="70" id="nome"
                    required class="input">
            </p>
            <p>
                <label for="descricao"> Descrição do Material: </label><br>
                <input type="text" name="descricao" placeholder="Descrição do Material" size="30" maxlength="70"
                    id="descricao" class="input">
            </p>
            <p>
                <label for="valor"> Valor: </label><br>
                <input type="number" name="valor" id="valor" placeholder="Valor" class="input">
            </p>
            <p>
                <label for="qtd"> Quantidade: </label><br>
                <input type="number" name="qtd" id="qtd" placeholder="Quantidade" class="input">
            </p>
            <p>
                <input type="submit" name="acao" value="Cadastrar Material" class="botao">
            </p>
            <input type="hidden" name="form" value="f_form">
            <?php
                if(isset(($_POST['id']))){
                    $id = addslashes($_POST['id']);
                    $qtd = addslashes($_POST['qtd']);
                    $nome = addslashes($_POST['nome']); 
                    $descricao = addslashes($_POST['descricao']);
                    $valor = addslashes($_POST['valor']);

                    if($id == ''){
                    form::alert('erro','O ID ficou vazio!');
                    }else if ($nome == ''){
                    form::alert('erro','O Nome ficou vazio!'); 
                    }else{
                        form::cadastrar($id, $nome, $descricao, $valor, $qtd);
                        form::alert('erro','Produto ' .$nome. ' cadastrado com sucesso!');
                    }
                }
            ?>
        </div>
    </form>
</body>

</html>