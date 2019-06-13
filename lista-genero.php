<?php
    include('requires/verific-login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <link rel="stylesheet" href="css/lista.css">
    <link rel="icon" href="imagens/favicon.png">

    <title>Lista de genêros</title>
  </head>
  <body>
      
      <?php
      
        require("menu.php");
      
      ?>
      
      <section class="sec-lista-jogos">
          
          <div class="lista-jogos">
              
            <?php

                $generoSelecionado = $_GET['generoSelecionado'];
            
                require('requires/conexao.php');

                $consultaConteudo= $pdo->query("SELECT * FROM tbJogos where idGenero = $generoSelecionado");

                while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {	
                    
                echo"<div class='card'>
                        <a href='jogo.php?jogoSelecionado={$resultConteudo['idJogo']}'>
                          <div class='row align-items-center'>
                            <div class='col'>
                              <img src={$resultConteudo['caminhoImg']} class='card-img' alt={$resultConteudo['nomeJogo']}>
                            </div>
                             <div class='card-body'>
                                  <h3>{$resultConteudo['nomeJogo']}</h3>
                                  <h6>{$resultConteudo['desenvolvedora']}</h6>
                                  <h6>{$resultConteudo['dtLancamento']}</h6>
                              </div>
                          </div>
                        </a>
                    </div>";
                }

                $pdo = null;
            
            ?>
              
          </div>
          
      </section>


      <section>

        <?php

        require("rodape.php");
          
      ?>

      </section>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>