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

    <title>Admin || Usuarios</title>
</head>
   <body>
      <?php
         require('menu-sidebar.php');
      ?>

      <div class="col-md-10 ml-sm-auto col-lg-10" id="main">
        <div class="container-fluid">
          <h1><i class="fas fa-user-cog"></i> Usuários</h1><br>
          <h5>Relatório de Usuários</h5>
        
        <section class="container-fluid">
          <div class="table-responsive-sm">
			
                <table class="table">
                <tr>
                    <th>#id</th>                    
                    <th>Usuario</th>
                    <th>tag</th>
                    <th>E-mail</th>
                    <th>Nível</th>
                    <th>Permite Login</th>
                    <th>Inclusão</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
				<?php
					require('../requires/conexao.php');

					$consultaUsuario = $pdo->query("SELECT t1.*, t2.nivelUsuario, nivelUsuario FROM tbUsuarios t1 inner join tbNivelUsuarios t2 on (t1.idNivelUsuario = t2.idNivelUsuario);");
					
					while ($resultTbUsuario = $consultaUsuario->fetch(PDO::FETCH_ASSOC)) {													
						echo "<tr>";
							echo "<td>{$resultTbUsuario['idUsuario']} </td>";
							echo "<td>{$resultTbUsuario['nomeUsuario']} </td>";
              echo "<td>{$resultTbUsuario['tagUsuario']} </td>";
              echo "<td>{$resultTbUsuario['emailUsuario']} </td>";
              echo "<td>{$resultTbUsuario['nivelUsuario']} </td>";
              /*echo "<td>{$resultTbUsuario['ativo']} </td>";*/
              if ($resultTbUsuario['ativo'] == '1'){
                echo "<td style='text-align: center'><i class='fas fa-check'></i></td>";
              }
              else {
                echo "<td style='text-align: center'><i class='fas fa-times'></i></td>";
              }
              echo "<td>{$resultTbUsuario['dtCadastro']} </td>";
							echo "<td class='coluna-btn'><a href='?idUsuario=$resultTbUsuario[idUsuario]&nomeUsuario=$resultTbUsuario[nomeUsuario]&tagUsuario=$resultTbUsuario[tagUsuario]&senhaUsuario=$resultTbUsuario[senhaUsuario]&emailUsuario=$resultTbUsuario[emailUsuario]&nivelUsuario=$resultTbUsuario[nivelUsuario]&ativo=$resultTbUsuario[ativo]' class='btn btn-primary' id='btn-tabela'><i class='far fa-edit'></i></a></td>";
							echo "<td class='coluna-btn'><a href='usuario-excluir.php?idUsuario=$resultTbUsuario[idUsuario]' class='btn btn-danger' id='btn-tabela' alt='Excluir'><i class='far fa-trash-alt'></i></a></td>";    
						echo "</tr>";
					}

					$pdo = null;	
				?>
                </table><br>    
			
          </div>
        </section>
            
                <div class="container" id="tabela">
                <form method="POST" action="usuario-editar.php">
                    <h3><i class="far fa-edit"></i> Editar Usuário</h3>
                    <input type="hidden" class="form-control" name="idUsuario" value="<?php echo @$_GET['idUsuario']; ?>" required>
                    <div class="form-group">
                        <label for="nomeUsuario">Nome do Usuário</label>
                        <input type="text" class="form-control" name="nomeUsuario" placeholder="Ex.: Administrador" value="<?php echo @$_GET['nomeUsuario']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tagUsuario">Tag</label>
                        <input type="text" class="form-control" name="tagUsuario" placeholder="Ex.: @usuario" value="<?php echo @$_GET['tagUsuario']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="desenvolvedora">Senha</label>
                        <input type="password" class="form-control" name="senhaUsuario" placeholder="********" value="<?php echo @$_GET['senhaUsuario']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="desenvolvedora">Nova Senha</label>
                        <input type="text" class="form-control" name="senhaUsuarioAtt" placeholder="********">
                    </div>
                    <div class="form-group">
                        <label for="dtLancamento">E-mail</label>
                        <input type="text" class="form-control" name="emailUsuario" placeholder="usuario@email.com" value="<?php echo @$_GET['emailUsuario']; ?>" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="ativo" <?php if(@$_GET['ativo'] == 1){ echo "checked";} ?>> 
                        <label for="ativo">Permite Login</label>
                        </div>
                    <div class="form-group">
                    <label for="idGenero">Nível de acesso</label>
                    <select class="form-control" name="idNivelUsuario" id="idNivelUsuario" required>
                      <option value=""> -- Selecione um nível -- </option>
                    <?php
                    require('../requires/conexao.php');
                      $consultaNivUsuario = $pdo->query("SELECT * FROM tbNivelUsuarios order by nivelUsuario;");
              
                        while ($resultTbNivUsuario = $consultaNivUsuario->fetch(PDO::FETCH_ASSOC)) {
                          echo "<option value={$resultTbNivUsuario['idNivelUsuario']}>{$resultTbNivUsuario['nivelUsuario']} </option>";
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
        location.href="usuarios.php"
        }
    </script>

  </body>
</html>     