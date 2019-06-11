<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="jquery-1.10.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $(".btn-cadastro").click(function () {
                $(".formulario").css({
                    left: "30%"
                });
                $(".formulario-login").css({
                    left: "30%"
                });
                $(".formulario-cadastro").css({
                    left: "30%"
                });
                $(".formulario-login").css("visibility", "hidden");
                setTimeout(function () {
                    $('.formulario-cadastro').css("visibility", "visible")
                }, 700);
            });
            $(".btn-login").click(function () {
                $(".formulario").css({
                    left: "70%"
                });
                $(".formulario-cadastro").css({
                    left: "70%"
                });
                $(".formulario-login").css({
                    left: "70%"
                });
                $(".formulario-cadastro").css("visibility", "hidden");
                setTimeout(function () {
                    $('.formulario-login').css("visibility", "visible")
                }, 700);
            });
        });
    </script>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/usuario.css">
    <link rel="icon" href="imagens/favicon.png">

    <title>Usuario</title>
</head>

<body>

    <div class="caixa-form">

        <div class="formulario">
        </div>

        <div class="formulario-login">
            <form method="POST" action="requires/logar-usuario.php">
                <h1>Entrar</h1>
                <input name="txtUsuario" type="text" placeholder="Insira seu Tag" /><br>
                <input name="txtSenha" type="password" placeholder="Insira sua senha" /><br>
                <button type="submit" class="btn-entrar">Entrar</button>
            </form>
        </div>

        <div class="formulario-cadastro">
            <form method="POST" action="requires/cadastrar-usuario.php">
                <h1>Cadastrar</h1>
                <input type="text" name="txtNome" placeholder="Insira seu Nome" required /><br>
                <input type="text" name="txtUsuario" placeholder="Insira sua Tag" required /><br>
                <input type="email" name="txtEmail" placeholder="Insira seu email" required /><br>
                <input type="password" name="txtSenha" placeholder="Insira sua senha" required /><br>
                <button type="submit" class="btn-cadastrar">Cadastrar</button>
            </form>
        </div>

        <div class="login-msg">Já tenho uma conta</div>
        <div class="cadastro-msg">Não tenho uma conta</div>
        <button class="btn-login">Logar</button>
        <button class="btn-cadastro">Cadastrar-se</button>

    </div>

</body>

</html>