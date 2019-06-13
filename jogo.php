<?php
    include('requires/verific-login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/jogo.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="icon" href="imagens/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  <title>
  <?php
     $idSelecionado = $_GET['jogoSelecionado'];
     require('requires/conexao.php');

     $consultaConteudo= $pdo->query("SELECT t1.*, t2.genero FROM tbJogos t1
     inner join tbGeneros t2 on (t1.idGenero = t2.idGenero)
     where idJogo = $idSelecionado");

     while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {
      
      echo "{$resultConteudo['nomeJogo']}";
      
     }

     $pdo = null;
     
     ?>
  </title>
</head>

<body>

<?php

  require("menu.php");

?>

  <section class="sec-jogo row align-items-center">

     <?php
     $idSelecionado = $_GET['jogoSelecionado'];
            
     require('requires/conexao.php');

     $consultaConteudo= $pdo->query("SELECT t1.*, t2.genero FROM tbJogos t1
     inner join tbGeneros t2 on (t1.idGenero = t2.idGenero)
     where idJogo = $idSelecionado");

     while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {
      
      echo "<div class='img-jogo col'>
              <img src={$resultConteudo['caminhoImg']} class='capa'>
          </div>
          <div class='infos-jogo'>
              <h3>{$resultConteudo['nomeJogo']}</h3>
              <h6>{$resultConteudo['genero']}</h6>
              <p>{$resultConteudo['descricao']}</p>
            </div>";
      
     }

     $pdo = null;
     
     ?>

  </section>

  <section class="sec-musicas">

    <div class="card-group">

  <?php

     $idSelecionado = $_GET['jogoSelecionado'];
            
     require('requires/conexao.php');

     $consultaConteudo= $pdo->query("SELECT * from tbMusicas where idJogo = $idSelecionado");

     while ($resultConteudo = $consultaConteudo->fetch(PDO::FETCH_ASSOC)) {
      
      echo "<div class='card text-center' style='width: 18rem;'>
      <div class='card-body'>
        <h4 class='card-title'>{$resultConteudo['tituloMusica']}</h5>
        <p class='card-text'>{$resultConteudo['artista']}</p>
        <a href='{$resultConteudo['urlMusica']}' target='_blank' class='btn btn-secondary'>Ouvir</a>
      </div>
    </div>";
      
     }

     $pdo = null;
     
     ?>

</div>

  </section>

  <?php
  
     require("rodape.php");

  ?>

</body>


</html>