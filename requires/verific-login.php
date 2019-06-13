<?php
session_start();
if(!$_SESSION['txtUsuario']){
    header("location: index.php");
    exit();
}