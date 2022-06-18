<?php
include('config.php');
include('classes/mysql.php');
?>
<html>

<head lang="pt-BR">
    <title>Facility Stock - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <header>
        <div class="titulo">
            <a href="../index.php">
                <h1>Facility Stock</h1>
            </a>
        </div>
        <nav class="menu">
            <a href="../index.php">Home</a>
            <a href="../telas/quemSomos.php">Quem somos</a>
            <a href="../telas/contato.php">Contato</a>
            <a href="../telas/telaCadastrar.php">Cadastra-se</a>
        </nav>
    </header>
    <section>
        <div class="img">
            <img src="../img/img-new/cadastrar.png" alt="">
        </div>
        <form method="get" action="../sistema/index.php" class="conteudos">
            <h1>LOGIN AT FACILITY STOCK</h1>
            <div>
                <p>
                    <label for="id"> E-MAIL </label><br>
                    <center>
                        <input type="email" name="id" id="id" required class="input" data-validate="Valid e-mail is required: ex@abx.xyz">
                    </center>
                </p>
                <p>
                    <label for="nome"> SENHA </label><br>
                    <center>
                        <input type="password" name="nome" l size="50" maxlength="70" id="nome" required class="input" data-validate="Password is required">
                    </center>
                </p>
                </center>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="lembrarSenha" for="ckb1">
                        Remember me
                    </label>
                </div>

                <center>
                    <p>Não tem conta? <a href="../telas/telaCadastrar.php" class="cadastre">Cadastra-se</a>
                    </p>
                    <?php
                    if (isset(($_GET['email']))) {
                        $email = addslashes($_GET['email']);
                        $senha = addslashes($_GET['senha']);

                        if ($email == '') {
                            formLogin::alert('erro', 'O Email ficou vazio!');
                        } else if ($senha == '') {
                            formLogin::alert('erro', 'A Senha ficou vazia!');
                        } else {
                            formLogin::login($email, $senha);
                        }
                    }
                    ?>
                </center>

                <p>
                    <input type="submit" name="acao" value="Entrar" class="botao">
                </p>
            </div>
        </form>
    </section>
    <div class="imgRodape">
        <img src="../img/img-new/face.png">
        <img src="../img/img-new/instagram.png">
        <img src="../img/img-new/youtube.png">
        <img src="../img/img-new/linkedin (1).png">
    </div>
    <footer class="rodape">
        <p>&copy;Createc 2022</p>
    </footer>
</body>

</html>