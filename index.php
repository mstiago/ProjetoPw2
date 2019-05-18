<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Soundtrack || Index</title>
</head>

<section class="sec-cabecalho">

    <?php
        require("menu.php");
    ?>

</section>

<body>

    <section class="sec-main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-5">Ouça sua trilha sonora a qualquer momento, quando quiser.</h1>
                    <p class="texto-index">Experimente agora e ouça a trilha sonora do seu game favorito.</p>
                    <div class="row">
                        <a href="#" class="inscrever btn btn-info">Experimente</a>
                    </div>
                </div>
                <div class="col">
                    <div class="w-25 p-3" alt="Lucio">
                        <img src="imagens/lucio-index01.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-lista-index">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-5">porque usar?</h1>
                    <ul class="list-group list-group-flush">
                        <li>
                            <h3>Nostalgia</h3>
                            <p>Mario, Sonic ou TopGear, Ouça as trilha mais nostálgicas dos games.</p>
                        </li>
                        <li>
                            <h3>Para todos os gostos</h3>
                            <p>Desde Futebol até God of War, para todos os tipos de gostos.</p>
                        </li>
                        <li>
                            <h3>Um mundo Gamer com você</h3>
                            <p>Embarque no universo do seu jogo favorito.</p>
                        </li>
                        <li>
                            <h3>Feito para Você, Gamer apaixonado</h3>
                            <p>As músicas da sua infância a seu alcance.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-faixa">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Escolha o melhor pra você</h1>
                <p class="lead"> E curta suas músicas quando quiser </p>
            </div>
        </div>
    </section>

    <section class="sec-carrosel">
        <div class="container">
            <div id="controleCarrosel" class="carousel slide carrosel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="card-deck w-75">

                                <div class="card">
                                    <a href="#">
                                        <div class="card-header text-center"><span>Titulo Via PHP/Banco</span></div>
                                        <img class="card-img-top" src="imagens/01.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <p class="card-text">Descrição/Resumo da Trilha Sonora Via PHP/Banco</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="card">
                                    <a href="#">
                                        <div class="card-header text-center"><span>Titulo Via PHP/Banco</span></div>
                                        <img class="card-img-top" src="imagens/01.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <p class="card-text">Descrição/Resumo da Trilha Sonora Via PHP/Banco</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card-deck w-75">
                                <div class="card">
                                    <a href="#">
                                        <div class="card-header text-center"><span>Titulo Via PHP/Banco</span></div>
                                        <img class="card-img-top" src="imagens/01.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <p class="card-text">Descrição/Resumo da Trilha Sonora Via PHP/Banco</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="#">
                                        <div class="card-header text-center"><span>Titulo Via PHP/Banco</span></div>
                                        <img class="card-img-top" src="imagens/01.jpg" alt="Imagem de capa do card">
                                        <div class="card-body">
                                            <p class="card-text">Descrição/Resumo da Trilha Sonora Via PHP/Banco</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" id="controlador-slide" href="#controleCarrosel" role="button" data-slide="prev">
                        <span><i class="fas fa-angle-left"></i></span>
                    </a>
                    <a class="carousel-control-next" id="controlador-slide" href="#controleCarrosel" role="button" data-slide="next">
                        <span><i class="fas fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
        require("rodape.php");
    ?>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 40) { // se rolar 40px ativa o evento
                $("#menu").addClass("ativo"); //coloca a classe "ativo" no id=menu
            } else {
                $("#menu").removeClass("ativo"); //se for menor que 40px retira a classe "ativo" do id=menu
            }
        });
    </script>
</body>

</html>