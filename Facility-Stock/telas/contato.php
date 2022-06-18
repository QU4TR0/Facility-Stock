<?php
include('config.php');
include('classes/mysql.php')
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contato.css">
    <title>Fale conosco</title>
</head>

<body>
    <header>
        <div class="titulo">
            <a href="../index.php">
                <h1>Facility Stock</h1>
            </a>
        </div>
        <nav class="menu">
            <a href="../telas/quemSomos.php">
                <li>Quem Somos</li>
            </a>
            <a href="../telas/telaCadastrar.php">
                <li>Cadastro</li>
            </a>
        </nav>
        <!--MENU INTERATIVO-->

    </header>
    <!--CABEÇALHO-->

    <section class="imgPrincipal">
        <div class="texto">
            <h1>Entre em Contato!</h1>
            <h1>Venha conhecer o maior</h1>
            <h1>Sistema de estoque do Brasil!</h1>
        </div>
        <div class="img">
            <img src="../img/img-new/contato.png" alt="">
        </div>
    </section>

    <section class="dados">
        <form method="post" action="#">
            <p>Nome*</p>
            <input type="text" id="nome" placeholder="Informe seu nome">
            <p>E-mail*</p>
            <input type="text" id="email" placeholder="Informe seu e-mail">
            <p>Telefone</p>
            <input type="text" id="telefone" placeholder="Telefone para contato">
            <p>Mensagem</p>
            <textarea name="" id="msg" cols="80" rows="10" placeholder="Faça um breve resumo para podermos direcioná-lo" padding="10px"></textarea>
            <p><input type="submit" id="botao" name="botao" class="botao" value="Enviar"></p>
            <?php
            if (isset(($_POST['email']))) {
                $email = addslashes($_POST['email']);
                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $msg = addslashes($_POST['msg']);

                if ($email == '') {
                    formContato::alert('erro', 'O Email ficou vazio!');
                } else if ($nome == '') {
                    formContato::alert('erro', 'O Nome ficou vazio!');
                } else {
                    formContato::contato($email, $nome, $telefone, $msg);
                    formContato::alert('sucesso', '' . $nome . ' Sua mensagem foi cadastrada com sucesso!');
                }
            }
            ?>
        </form>
    </section>

    <div class="descritivo">
        <h1>O sistema da Facility Stock leva características que um sistema comum tanto quer.</h1>
    </div>

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