<?php

    require('../requires/conexao.php');

    $idGen=$_POST['idGenero'];
    $gen=$_POST['genero'];
    //$b=isset($_POST['usuario'])?$_POST['usuario'] :'';
    //$c=isset($_POST['senha'])?$_POST['senha'] :'';

    try{
        $stmt = $pdo->prepare("UPDATE tbGeneros SET genero=:gen WHERE idGenero=:idGen");
        $stmt->execute(array(':idGen' => $idGen, ':gen' => $gen));
        $stmt = null;
        header('location: generos.php');
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>