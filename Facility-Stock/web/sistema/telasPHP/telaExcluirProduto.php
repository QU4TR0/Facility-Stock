<?php
    include ('config.php');
    Mysql::conectar();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Facility Stock - Excluir Produtos</title>
</head>

<body>
    <img src="../img/TelaCadastro.png">
    <form method="get" action="" class="cadastro">
        <div class="conteudos">
            <h3>Excluir Produtos</h3>
            <p class="labels">
                <label for="id">Id do Produto:</label>
                <input type="number" name="id" id="id" placeholder="Código do Material">
            </p>
            <!--<p class="labels">
                <label for="nome">Nome do Produto:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome do Material">
            </p>-->
            <p class="botaoposition">
                <input type="submit" name="botao" class="botao" id="botao" value="Excluir">
            </p>
            <?php
            if(isset(($_GET['id']))){
                $id = addslashes($_GET['id']);

                if($id == ''){
                    formExcluir::alert('erro','O ID ficou vazio!');
                    }else {
                            formExcluir::excluir($id);
                            formExcluir::alert('sucesso','Produto ' .$id. ' excluído com sucesso!');
                        }
            }
        ?>
        </div>
    </form>
</body>

</html>