<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Facility Stock</title>
</head>

<body>
    <header>
        <a href="../index.php">
            <h2>Facility Stock</h2>
        </a>
        <nav>
            <div class="dropdown">
                <button class="dropbtn">
                    <h4>Produtos</h4>
                </button>
                <div class="dropdown-content">
                    <a href="telasPHP/telaCadastroProduto.php" target="central">Cadastrar</a>
                    <a href="telasPHP/telaConsultaProduto.php" target="central">Consultar</a>
                    <a href="telasPHP/telaAlterarProduto.php" target="central">Alterar</a>
                    <a href="telasPHP/telaExcluirProduto.php" target="central">Excluir</a>
                </div>
            </div>
            <!--
                <div class="dropdown">
                    <button class="dropbtn"><h4>Usuários</h4></button>
                    <div class="dropdown-content">
                        <a href="telasProdutos/telaCadastroProduto.html" target="central">Cadastrar</a>
                        <a href="telasProdutos/telaConsultarProduto.html" target="central">Consultar</a>
                        <a href="telasProdutos/telaAlterarProduto.html" target="central">Alterar</a>
                        <a href="telasProdutos/telaExcluirProduto.html" target="central">Excluir</a>
                    </div>
                </div>-->
        </nav>
        <div>
            <a href="../index.php" class="logoff"><img src="img/logoff.png">
                <h4>Log Off</h4>
            </a>
        </div>
    </header>
    <section>
        <iframe name="central"></iframe>
    </section>
    <footer>
        &copy;Createc 2022
    </footer>
</body>

</html>