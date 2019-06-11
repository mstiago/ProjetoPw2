<?php

    $idExcluir=$_GET['idJogo'];

    require('../requires/conexao.php');

    try {
        $stmt = $pdo->prepare("DELETE FROM tbJogos WHERE idJogo=$idExcluir");
        $stmt->execute();
        $stmt = null;
        header('Location: jogos.php');   
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>