<?php
    include ('config.php');
    Mysql::conectar();
?>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastrar.css">
    <title>Facility Stock - Cadastra-se</title>
</head>

<body>
    <header>
        <div class="titulo">
            <a href="../index.php">
                <h1>Facility Stock</h1>
            </a>
        </div>
        <nav class="menu">
            <a href="../telas/quemSomos.html">
                <li>Quem Somos</li>
            </a>
            <a href="../telas/login.php">
                <li>Login</li>
            </a>
        </nav>
        <!--MENU INTERATIVO-->
    </header>
    <!--CABEÇALHO-->

    <section class="imgPrincipal">
        <div class="img">
            <img src="../img/img-new/cadastrar.png" alt="">
        </div>
        <div class="dados">
            <h1>Criar uma Conta</h1>
            <p>É rápido e fácil.</p>
            <hr>
            <form method="post" action="#" class="inputs">
                <input type="text" id="nome" placeholder="Nome" name="nome">
                <input type="text" id="sobrenome" placeholder="Sobrenome" name="sobrenome">
                <input type="text" id="email" placeholder="E-mail" name="email">
                <input type="password" id="senha" placeholder="Senha" name="senha">
                <p>Data de Nascimento</p>
                <input type="date" id="data" name="data"><br><br>
                <button class="btn">Cadastre-se</button>
                <a href="../telas/login.html">Já tem uma conta?</a>
            </form>
            <?php
                if(isset(($_POST['email']))){
                    $email = addslashes($_POST['email']);
                    $nome = addslashes($_POST['nome']);
                    $sobrenome = addslashes($_POST['sobrenome']); 
                    $senha = addslashes($_POST['senha']);
                    $data = addslashes($_POST['data']);

                    if($email == ''){
                    formCadastrar::alert('erro','O Email ficou vazio!');
                    }else if ($nome == ''){
                    formCadastrar::alert('erro','O Nome ficou vazio!');
                    }else {
                        formCadastrar::cadastrar($email, $nome, $sobrenome, $senha, $data);
                        formCadastrar::alert('sucesso','Usuário ' .$nome. ' cadastrado com sucesso!');
                    }
                }
            ?>
        </div>
        </div>
    </section>

    <div class="redes">
        <a href="/">
            <img src="../img/img-new/face.png" alt="">
        </a>
        <a href="/">
            <img src="../img/img-new/instagram.png" alt="">
        </a>
        <a href="/">
            <img src="../img/img-new/linkedin (1).png" alt="">
        </a>
        <a href="/">
            <img src="../img/img-new/youtube.png" alt="">
        </a>
    </div>
    <!--REDES SOCIAIS-->

    <div class="footer">
        <footer>&copy;Createc 2022</footer>
    </div>
    <!--RODAPÉ-->
</body>

</html>