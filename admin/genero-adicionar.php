<?php

    require('../requires/conexao.php');

    $genero=isset($_POST['genero'])?$_POST['genero'] :'';
    //$c=isset($_POST['senha'])?$_POST['senha'] :'';

    try{
        $stmt = $pdo->prepare("INSERT INTO tbGeneros (genero) VALUES ('$genero')");
    $stmt->execute();
        $stmt = null;
        header('location: generos.php');
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>