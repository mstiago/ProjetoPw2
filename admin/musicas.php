<!DOCTYPE html>
<html lang="pt-br">

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
    <link rel="icon" href="../imagens/favicon.png">

    <title>Admin || Músicas</title>
</head>
   <body>
      <?php
         require('menu-sidebar.php');
      ?>

      <div class="col-md-10 ml-sm-auto col-lg-10" id="main">
        <div class="container-fluid">
          <h1><i class="fas fa-music"></i> Músicas</h1><br>
          <h5>Relatório de músicas</h5>

        <section class="container-fluid">
          <div class="table-responsive-sm">
			
                <table class="table">
                <tr>
                    <th>#id</th>                    
                    <th style="width: 40%">Título</th>
                    <th style="width: 25%">Artista</th>
                    <th style="width: 20%">url-Youtube</th>
                    <th style="width: 40%">Jogo</th>
                    <th style="width: 5%">Editar</th>
                    <th style="width: 5%">Excluir</th>
                </tr>
				<?php
					require('../requires/conexao.php');
					// idMusica, tituloMusica, artista, urlMusica, idJogo, jogo
					$consultaMusica = $pdo->query("SELECT t1.*, t2.nomeJogo as jogo FROM tbMusicas t1 inner join tbJogos t2 on (t1.idJogo = t2.idJogo);");
					
					while ($resultTbMusica = $consultaMusica->fetch(PDO::FETCH_ASSOC)) {													
						echo "<tr>";
							echo "<td>{$resultTbMusica['idMusica']} </td>";
							echo "<td>{$resultTbMusica['tituloMusica']} </td>";
              echo "<td>{$resultTbMusica['artista']} </td>";
              echo "<td>{$resultTbMusica['urlMusica']} </td>";
              echo "<td>{$resultTbMusica['jogo']} </td>";
							echo "<td class='coluna-btn'><a href='?idMusica=$resultTbMusica[idMusica]&tituloMusica=$resultTbMusica[tituloMusica]&artista=$resultTbMusica[artista]&urlMusica=$resultTbMusica[urlMusica]&idJogo=$resultTbMusica[idJogo]' class='btn btn-primary' id='btn-tabela'><i class='far fa-edit'></i></a></td>";
							echo "<td class='coluna-btn'><a href='musica-excluir.php?idMusica=$resultTbMusica[idMusica]' class='btn btn-danger' id='btn-tabela' onclick=\"return confirm('Tem certeza que deseja deletar esse registro?');\"><i class='far fa-trash-alt'></i></a></td>";    
						echo "</tr>";
					}

					$pdo = null;	
				?>
                </table><br>    
			
          </div>
        </section>
            
                <div class="container" id="tabela">
                <form method="POST" action="musica-editar.php">
                    <h3><i class="far fa-edit"></i> Editar Música</h3>
                    <input type="hidden" class="form-control" name="idMusica" value="<?php echo @$_GET['idMusica']; ?>" required>
                    <div class="form-group">
                        <label for="tituloMusica">Título da Música</label>
                        <input type="text" class="form-control" name="tituloMusica" placeholder="Ex.: The Next Episode" value="<?php echo @$_GET['tituloMusica']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="artista">Artista</label>
                        <input type="text" class="form-control" name="artista" placeholder="Ex.: Snoop Dogg" value="<?php echo @$_GET['artista']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="urlMusica">URL Youtube</label>
                        <input type="text" class="form-control" name="urlMusica" placeholder="https://www.youtube.com/watch" value="<?php echo @$_GET['urlMusica']; ?>" required>
                    </div>
                    <div class="form-group">
                    <label for="idJogo">Jogo</label>
                    <select class="form-control" name="idJogo" id="idJogo" required>
                      <option value=""> -- Selecione um jogo -- </option>
                    <?php
                    require('../requires/conexao.php');
                      $consultaJogo = $pdo->query("SELECT * FROM tbJogos;");
              
                        while ($resultTbJogo = $consultaJogo->fetch(PDO::FETCH_ASSOC)) {                          
                          echo "<option value={$resultTbJogo['idJogo']}>{$resultTbJogo['nomeJogo']} </option>";
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

    <script type="text/javascript">
        function cancelar()
        {
        location.href=" musicas.php"
        }
    </script>

  </body>
</html>     