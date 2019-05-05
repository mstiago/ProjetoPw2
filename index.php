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

        <form action="" method="post" class="d-flex justify-content-end">

            <div class="col">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="username" id="name" placeholder="Digite o seu Email" required>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua Senha" required>
                </div>
            </div>

            <div class="col">
                <div class="text-center">
                    <small>Não tem conta ?</small> <a href="requires/menu.php" class="text-monospace"><small>Inscrever-se</small></a>
                </div>

                <button type="submit" name="submit" value="Login" class="btn btn-outline-dark btn-lg btn-block">Entrar</button>
            </div>

        </form>

    </div>
</header>

<body>

    <div class="container-fluid login-resumo">

        <div class="container">

            <div class="d-flex justify-content-center">

                <h1 class="display-4">Você um só com o mundo digital</h1>

            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="imagens/01.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack 1</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="imagens/02.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack </h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="imagens/03.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack 3</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="imagens/04.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack 3</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
            </div>


            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="imagens/01.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack 1</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="imagens/02.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack </h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="imagens/03.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack 3</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="imagens/04.jpg" alt="Imagem de capa do card" width="100px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title">Soundtrack 3</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Atualizados 3 minutos atrás</small>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">

                <button type="submit" name="submit" class="btn btn-outline-dark">Explore as melhores trilhas sonoras do mundo</button>

            </div>

        </div>

    </div>
    <div class="jumbotron jumbotron-fluid faixa">
        <div class="container">
            <h1 class="display-4">Você um só com o mundo digital</h1>
            <p class="lead">Entre na Soundtrack para conectar-se ao seu game favorito, você e seu game um só. Afinal ? O que você ta esperando ?</p>
        </div>
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>