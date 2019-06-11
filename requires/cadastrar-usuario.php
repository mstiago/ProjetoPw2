<?php
session_start();
require('conexao01.php');

if(empty($_POST['txtUsuario']) || empty($_POST['txtSenha'])){
    header("location: ../usuario.php");
    exit();
}
	
$nome = mysqli_real_escape_string($conexao, trim($_POST['txtNome']));
$usuario =  mysqli_real_escape_string($conexao, trim($_POST['txtUsuario']));
$email =  mysqli_real_escape_string($conexao, trim($_POST['txtEmail']));
$senha =  mysqli_real_escape_string($conexao, trim($_POST['txtSenha']));

$verificUsuario = "select count(*) as totalUsuario from tbusuarios where tagUsuario='{$usuario}'";
$resultUsuario = mysqli_query($conexao, $verificUsuario);
$linhaUsuario = mysqli_fetch_assoc($resultUsuario);

$verificEmail = "select count(*) as totalEmail from tbusuarios where emailUsuario='{$email}'";
$resultEmail = mysqli_query($conexao, $verificEmail);
$linhaEmail = mysqli_fetch_assoc($resultEmail);

if($linhaUsuario['totalUsuario'] == 1){
    echo ("<script>
        window.alert('Usuario já existe!');
        window.location.href='../usuario.php';			
    </script>"
    );		
    exit();
}
if($linhaEmail['totalEmail'] == 1){ 
    echo ("<script>
        window.alert('Email já existe!');
        window.location.href='../usuario.php';			
    </script>"
    );	
    exit();
}

$insercaoSql = "INSERT INTO tbusuarios VALUES ('null', '$nome', '$usuario', '$senha', '$email', 1, 1, NOW())";

if($conexao->query($insercaoSql) === true){
    echo ("<script>
        window.alert('Agora Logue com a sua conta!');
        window.location.href='../usuario.php';			
    </script>"
    );	
}

$conexao->close();

?>