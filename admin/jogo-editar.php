<?php

    require('../requires/conexao.php');

    $idJogo=$_POST['idJogo'];
    $nomeJogo=$_POST['nomeJogo'];
    $dev=$_POST['desenvolvedora'];
    $dtLanc=$_POST['dtLancamento'];
    $descricao=$_POST['descricao'];
    $idGenero=$_POST['idGenero'];

    try{
        $stmt = $pdo->prepare("UPDATE tbJogos SET nomeJogo=:nomeJogo, desenvolvedora=:dev, dtLancamento=:dtLanc, descricao=:descricao, idGenero=:idGenero WHERE idJogo=:idJogo");
        $stmt->execute(array(':idJogo' => $idJogo, ':nomeJogo' => $nomeJogo, ':dev' => $dev,':dtLanc' => $dtLanc, ':descricao' => $descricao,':idGenero' => $idGenero));
        $stmt = null;
        header('location: jogos.php');
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>