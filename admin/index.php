<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/menu-sidebar.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
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
            <div class="table">
			
              <table class="table">
                <tr>
                  <th>Usuários</th>
                </tr>
                  <?php/*
                    require('../requires/conexao.php');

                    $sql = $pdo->query("SELECT COUNT(idUsuario) FROM tbUsuarios");

                    $total = $sql->fetchColumn();

                    echo "<tr>";
                    echo "<td>$total</td>";
                    echo "</tr>";

                    $pdo = null;*/	
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
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>