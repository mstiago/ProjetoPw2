<?php
    include('../requires/verific-login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php
      require('../requires/bootstrap.php');
    ?>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--CSS Local-->
    <link rel="stylesheet" type="text/css" href="../css/musicas.css">
    <link rel="stylesheet" type="text/css" href="../css/fonte.css">
    <link rel="icon" href="../imagens/favicon.png">

    <title>Admin || Dashboard</title>
</head>
   <body>
      <?php
         require('menu-sidebar.php');
      ?>

      <div class="col-md-10 ml-sm-auto col-lg-10" id="main">
        <div class="container-fluid">
          <h1><i class="fas fa-chart-line"></i> Dashboard</h1>
          <br>
          <section class="container">
            <div class="card">
              <table class="table">
                <tr>
                  <th><h3><i class="fas fa-cubes"></i> Usuários</h3></th>
                </tr>
                  <?php
                    require('../requires/conexao.php');

                    $sql = $pdo->query("SELECT COUNT(idUsuario) FROM tbUsuarios");

                    $total = $sql->fetchColumn();

                    echo "<tr>";
                    echo "<td><h1>$total</h1></td>";
                    echo "</tr>";

                    $pdo = null;	
                  ?>
              </table>
            </div>
            <div class="card">
              <table class="table">
                <tr>
                  <th><h3><i class="fas fa-gamepad"></i> Jogos</h3></th>
                </tr>
                  <?php
                    require('../requires/conexao.php');

                    $sql = $pdo->query("SELECT COUNT(idJogo) FROM tbJogos");

                    $total = $sql->fetchColumn();

                    echo "<tr>";
                    echo "<td><h1>$total</h1></td>";
                    echo "</tr>";

                    $pdo = null;	
                  ?>
              </table>
            </div>
            <div class="card">
              <table class="table">
                <tr>
                  <th><h3><i class="fas fa-music"></i> Músicas</h3></th>
                </tr>
                  <?php
                    require('../requires/conexao.php');

                    $sql = $pdo->query("SELECT COUNT(idMusica) FROM tbMusicas");

                    $total = $sql->fetchColumn();

                    echo "<tr>";
                    echo "<td><h1>$total</h1></td>";
                    echo "</tr>";

                    $pdo = null;	
                  ?>
              </table>
            </div>
            <div class="card">
              <table class="table">
                <tr>
                  <th><h3><i class="fas fa-cubes"></i> Gêneros</h3></th>
                </tr>
                  <?php
                    require('../requires/conexao.php');

                    $sql = $pdo->query("SELECT COUNT(idGenero) FROM tbGeneros");

                    $total = $sql->fetchColumn();

                    echo "<tr>";
                    echo "<td><h1>$total</h1></td>";
                    echo "</tr>";

                    $pdo = null;	
                  ?>
              </table>
            </div>
          </section>
        </div>
      </div>
  <!-- ## tags para fechar menu-sidebar.php ## -->    
    </div>
  </div>
  <!-- ## tags para fechar menu-sidebar.php ## -->
  </body>
</html>