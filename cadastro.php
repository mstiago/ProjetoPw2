<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cadastro.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Soundtrack || Inscrever-se</title>
</head>

<header>
    <nav class="navbar navbar-light">
        <div class="logo-cadastro">
            <a class="navbar-brand" href="#">
                <i class="fas fa-gamepad"></i>
                Soundtrack
                <i class="fas fa-headphones"></i>
            </a>
        </div>
    </nav>
</header>

<body>

    <div class="container-fluid cadastro">

        <div class="d-flex justify-content-center">
            <p class="text-justify">Ouça as melhores trilhas sonoras dos jogos</p>
        </div>

        <form class="d-flex justify-content-center">

            <div class="col-md-3">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite o seu Email" required>
                </div>

                <div class="form-group">
                    <label for="Usuário">Usuário</label>
                    <input type="text" class="form-control" id="name" placeholder="Como chamaremos você ?" required>
                    <small>Essa não será sua forma de login</small>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua Senha" required>
                </div>

                <div class="form-group">
                    <label for="password-repeat">Confirme a senha</label>
                    <input type="password" class="form-control" id="password-repeat" placeholder="Repita sua senha" required>
                </div>

                <div class="text-center">
                    <small>Já tem uma conta ?</small> <a href="requires/menu.php" class="text-success bg-dark"><small>Entrar</small></a>
                </div>

                <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Inscrever-se</button>
            </div>

        </form>
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>