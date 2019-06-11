<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!--CSS Local-->
    <link rel="stylesheet" type="text/css" href="../css/generos.css">

    <title>Admin || Generos</title>
</head>
   <body>
      <?php
         require('menu-sidebar.php');
      ?>

      <div class="col-md-10 ml-sm-auto col-lg-10" id="main">
        <div class="container-fluid">
          <h1><i class="fas fa-cubes"></i> Gêneros</h1><br>
          <h5>Adicione e gerencie os gêneros para categorizar os jogos inseridos no site.</h5>
          
        <section class="container" id="tabela">
        <div class="container" id="add">
          <form method="POST" action="genero-adicionar.php">
          <label><i class="fas fa-plus"></i> Adicionar Gênero</label>
            <div class="row">
              <div class="col-sm">
                <input type="text" name="genero" class="form-control" placeholder="Ex.: Esportes" required>
              </div>
                <div class="col-sm-auto">
                  <button type="submit" class="btn btn-success" value="Salvar">Adicionar</button>
                </div>
            </div>
          </form>
          </div>
        </section><br><br>


        <section class="container" id="tabela">
          <div class="table-responsive-sm">
			
                <table class="table">
                <tr>
                    <th>#id</th>                    
                    <th>Genero</th>
                    <th style="width: 10%">Editar</th>
                    <th style="width: 10%">Excluir</th>
                </tr>
				<?php
					require('../requires/conexao.php');
					
					$consultaGenero = $pdo->query("SELECT * FROM tbGeneros;");
					
					while ($resultTbGenero = $consultaGenero->fetch(PDO::FETCH_ASSOC)) {													
						echo "<tr>";
							echo "<td>{$resultTbGenero['idGenero']} </td>";
							echo "<td>{$resultTbGenero['genero']} </td>";
							echo "<td class='coluna-btn'><a href='?idGenero=$resultTbGenero[idGenero]&genero=$resultTbGenero[genero]' class='btn btn-primary' id='btn-tabela'><i class='far fa-edit'></i></a></td>";
							echo "<td class='coluna-btn'><a href='genero-excluir.php?idGenero=$resultTbGenero[idGenero]' class='btn btn-danger' id='btn-tabela'><i class='far fa-trash-alt'></i></a></td>";    
						echo "</tr>";
					}

					$pdo = null;	
				?>
                </table>    
			
          </div>
        </section>
            
                <div class="container" id="tabela">
                <form method="POST" action="genero-editar.php">
                  <div class="row">
                    <div class="col">
                      <input type="hidden" name="idGenero" class="form-control" placeholder="ID" value="<?php echo @$_GET['idGenero']; ?>">
                      <input type="text" name="genero" class="form-control" placeholder="Editar gênero" value="<?php echo @$_GET['genero']; ?>" required>
                    </div>
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
        location.href=" generos.php"
        }
    </script>

  </body>
</html>     