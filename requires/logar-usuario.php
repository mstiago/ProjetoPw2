<?php
session_start();
include("conexao01.php");

if(empty($_POST['txtUsuario']) || empty($_POST['txtSenha'])){
    header("location: ../usuario.php");
    exit();
}

$tagUsuario = mysqli_real_escape_string($conexao, $_POST['txtUsuario']);
$senhaUsuario = mysqli_real_escape_string($conexao, $_POST['txtSenha']);

$queryValidador = "select * from tbUsuarios where tagUsuario = '{$tagUsuario}' and senhaUsuario = '{$senhaUsuario}';";

$resultQuery = mysqli_query($conexao, $queryValidador);

$linhaQuery = mysqli_num_rows($resultQuery);

if($linhaQuery ==1){
    $_SESSION['txtUsuario'] = $tagUsuario;
    header("location: ../home.php");
    exit();
}
else{
    echo ("<script>
        window.alert('Senha ou usuario incorretos!');
        window.location.href='../usuario.php';			
        </script>"
    );
    exit();
}
?>