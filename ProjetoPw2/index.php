<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Soundtrack || Inscrever-se</title>
</head>
<header>
    <div class="row">
        <nav class="navbar navbar-light">
            <div class="logo-cadastro">
                <a class="navbar-brand" href="#">
                    <i class="fas fa-gamepad"></i>
                    Soundtrack
                    <i class="fas fa-headphones"></i>
                </a>
            </div>
        </nav>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script type="text/javascript">
        jQuery(function() {
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 400) {
                    $("#menu").addClass("menu-diferente");
                } else {
                    $("#menu").removeClass("menu-diferente");
                }
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(function() {
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > 400) {
                    $("#menu").css('background-color', 'rgba(30,156,161,1)');
                } else {
                    $("#menu").css('background-color', 'rgba(30,156,161,0.6)');
                }
            });
        });
    </script>
</header>

<body>

    <div class="container-fluid login-resumo">

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imagens/01.jpg" alt="Primeiro Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>FAÇA LOGIN</h5>
                            <p>OU FAÇA CADASTLO</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/02.jpg" alt="Segundo Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>FAÇA LOGIN</h5>
                            <p>OU FAÇA CADASTLO</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/03.jpg" alt="Terceiro Slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>FAÇA LOGIN</h5>
                            <p>OU FAÇA CADASTLO</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">

                <button type="submit" name="submit" class="btn btn-outline-dark">OTALIO</button>

            </div>

        </div>
    </div>
    <div class="jumbotron jumbotron-fluid faixa">
        <div class="container">
            <h1 class="display-4">Você um só com o mundo digital</h1>
            <p class="lead">Entre na Soundtrack para conectar-se ao seu game favorito, você e seu game um só. Afinal ? O que você ta esperando ?</p>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h1 class="display-4">Vai toma no cu e cadastra logo essa porra</h1>
    </div>

    <div class="container grupo-cadastro">
        <div class="faixa-cadastro">
            <div class="container">
                <p class="lead">Entre na Soundtrack para conectar-se ao seu game favorito, você e seu game um só. Afinal ? O que você ta esperando ?</p>
            </div>
        </div>
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>