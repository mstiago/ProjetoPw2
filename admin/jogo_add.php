<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!--CSS Local-->
    <link rel="stylesheet" type="text/css" href="../css/musicas.css">

    <title>Admin || Adicionar Jogos</title>
</head>
   <body>
      <?php
         require('menu-sidebar.php');
      ?>

      <div class="col-md-10 ml-sm-auto col-lg-10" id="main">
        <div class="container-fluid">
          <h1><i class="fas fa-gamepad"></i> Adicionar Jogos</h1><br>
          <h5>Adicione Jogos relacionados aos gêneros existentes no site.</h5>
          
          <div class="container" id="tabela">
                <form method="POST" action="jogo-adicionar.php" enctype="multipart/form-data">
                    <h3><i class="fas fa-plus"></i> Adicionar Jogo</h3>
                    <input type="hidden" class="form-control" name="idJogo" required>
                    <div class="form-group">
                        <label for="nomeJogo">Nome do Jogo</label>
                        <input type="text" class="form-control" name="nomeJogo" placeholder="Ex.: Tetris" required>
                    </div>
                    <input type="file" class=".form-control-file" placeholder="Imagem" name="txImg" required/><br><br>
                    <div class="form-group">
                        <label for="desenvolvedora">Desenvolvedora</label>
                        <input type="text" class="form-control" name="desenvolvedora" placeholder="Ex: Sega" required>
                    </div>
                    <div class="form-group">
                        <label for="dtLancamento">Lançamento</label>
                        <input type="text" class="form-control" name="dtLancamento" placeholder="2000-12-31" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" placeholder="Descrição do Jogo" rows="3" maxlength="2000" required></textarea>
                    </div>
                    <div class="form-group">
                    <label for="idGenero">Gênero</label>
                    <select class="form-control" name="idGenero" id="idGenero" required>
                      <option value=""> -- Selecione um gênero -- </option>
                    <?php
                    require('../requires/conexao.php');
                      $consultaGenero = $pdo->query("SELECT * FROM tbGeneros order by genero;");
              
                        while ($resultTbGenero = $consultaGenero->fetch(PDO::FETCH_ASSOC)) {                          
                          echo "<option value={$resultTbGenero['idGenero']}>{$resultTbGenero['genero']} </option>";
                        }
                        $pdo = null;	
                    ?>
                    </select>
                    </div>
                    <div class="row justify-content-end">
                    <div class="col-2">
                        <button type="button" class="btn btn-danger" onClick="cancelar()">Cancelar</button>
                      </div>
                      <div class="col-2">
                        <button type="submit" class="btn btn-success" value="Salvar">Salvar</button>
                      </div>
                    </div>
                </form>
                </div>

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