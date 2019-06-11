<?php

    $idExcluir=$_GET['idGenero'];

    require('../requires/conexao.php');

    try {
        $stmt = $pdo->prepare("DELETE FROM tbGeneros WHERE idGenero=$idExcluir");
        $stmt->execute();
        $stmt = null;
        header('Location: generos.php');   
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>