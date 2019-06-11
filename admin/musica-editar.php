<?php

    require('../requires/conexao.php');

    // idMusica, tituloMusica, artista, urlMusica, idJogo, jogo

    $idMus=$_POST['idMusica'];
    $titMus=$_POST['tituloMusica'];
    $art=$_POST['artista'];
    $urlMus=$_POST['urlMusica'];
    $idJogo=$_POST['idJogo'];

    try{
        $stmt = $pdo->prepare("UPDATE tbMusicas SET tituloMusica=:titMus, artista=:art, urlMusica=:urlMus, idJogo=:idJogo WHERE idMusica=:idMus");
        $stmt->execute(array(':idMus' => $idMus, ':titMus' => $titMus,':art' => $art,':urlMus' => $urlMus,':idJogo' => $idJogo));
        $stmt = null;
        header('location: musicas.php');
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>