<?php

    $idExcluir=$_GET['idUsuario'];

    require('../requires/conexao.php');

    try {
        $stmt = $pdo->prepare("DELETE FROM tbUsuarios WHERE idUsuario=$idExcluir");
        $stmt->execute();
        $stmt = null;
        header('Location: usuarios.php');   
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>