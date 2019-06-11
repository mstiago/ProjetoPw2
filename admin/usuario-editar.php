<?php

    require('../requires/conexao.php');

    $idUsuario=$_POST['idUsuario'];
    $nomeUsuario=$_POST['nomeUsuario'];
    $tagUsuario=$_POST['tagUsuario'];
    $senhaUsuario=$_POST['senhaUsuario'];
    $senhaUsuarioAtt=$_POST['senhaUsuarioAtt'];
    if ($senhaUsuarioAtt == ""){
    } else {
        $senhaUsuario = $senhaUsuarioAtt;
    }
    $emailUsuario=$_POST['emailUsuario'];
    $ativo = $_POST['ativo'];
    if ($ativo == "on"){
        $ativo = 1;
    }
    else{
        $ativo = 0;
    }
    $idNivelUsuario=$_POST['idNivelUsuario'];

    try{
        $stmt = $pdo->prepare("UPDATE tbUsuarios SET nomeUsuario=:nomeUsuario, tagUsuario=:tagUsuario, senhaUsuario=:senhaUsuario, emailUsuario=:emailUsuario, ativo=:ativo, idNivelUsuario=:idNivelUsuario WHERE idUsuario=:idUsuario");
        $stmt->execute(array(':idUsuario' => $idUsuario, ':nomeUsuario' => $nomeUsuario,':tagUsuario' => $tagUsuario,':senhaUsuario' => $senhaUsuario,':emailUsuario' => $emailUsuario,':ativo' => $ativo,':idNivelUsuario' => $idNivelUsuario));
        $stmt = null;
        header('location: usuarios.php');
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>