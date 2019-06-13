<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/menu-sidebar.css">

  <!-- ### Cabeçalho ### -->
  <header class="navbar fixed-top" id="cabecalho">
    <a class="navbar-brand" href="#">
      <img src="../imagens/Logo-Soundtrack-top.png" class="rounded float-left" alt="SoundTrack">
    </a>
    <ul class="navbar-nav flex-row">
      <li class="nav-item">
        <a class="nav-link" href="../home.php"><i class="fa fa-home"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../requires/sair-login.php"><i class="fas fa-sign-out-alt"></i></a>
      </li>
    </ul>
  </header>
  <!-- ### Fim do Cabeçalho ### -->

  <!-- ### Sidebar ### -->
  <div class="container-fluid" id="principal">
    <div class="row">
      <div class="col-md-2 sidebar" id="menu-lateral">
        <div class="sidebar-sticky">
            <ul class="nav flex-column" id="sticky-sidebar">
              <li class="nav-item">
                <a class="nav-link" href="index.php" id="item"><i class="fas fa-chart-line"></i> Dashboard</a><hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jogos.php"><i class="fas fa-gamepad"></i> Jogos</a>
                <ul class="nav flex-column list-group-submenu">
                  <li class="nav-item">
                    <a class="nav-link" id="sub-item" href="jogo_add.php">Cadastro de Jogos</a>
                  </li>
                </ul><hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="musicas.php" id="item"><i class="fas fa-music"></i> Músicas</a>
                <ul class="nav flex-column list-group-submenu">
                  <li class="nav-item">
                    <a class="nav-link" id="sub-item" href="musica_add.php">Cadastro de Músicas</a>
                  </li>
                </ul><hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="generos.php" id="item"><i class="fas fa-cubes"></i> Gêneros</a><hr>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="usuarios.php" id="item"><i class="fas fa-user-cog"></i> Usuários</a><hr>
              </li>
            </ul>
        </div>
      </div>
  <!-- ### Fim do Sidebar ### 
    ***  é necessário "fechar" a tag com </div></div>  *** -->
