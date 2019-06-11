<?php

    require('../requires/conexao.php');

    // idMusica, tituloMusica, artista, urlMusica, idJogo, jogo

    $titMus=$_POST['tituloMusica'];
    $art=$_POST['artista'];
    $urlMus=$_POST['urlMusica'];
    $idJogo=$_POST['idJogo'];


    try{
        $stmt = $pdo->prepare("INSERT INTO tbMusicas (tituloMusica, artista, urlMusica, idJogo) VALUES ('$titMus','$art', '$urlMus', '$idJogo');");
    $stmt->execute();
        $stmt = null;
        header('location: musicas.php');
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>