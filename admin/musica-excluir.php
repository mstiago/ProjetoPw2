<?php

    $idExcluir=$_GET['idMusica'];

    require('../requires/conexao.php');

    try {
        $stmt = $pdo->prepare("DELETE FROM tbMusicas WHERE idMusica=$idExcluir");
        $stmt->execute();
        $stmt = null;
        header('Location: musicas.php');   
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>