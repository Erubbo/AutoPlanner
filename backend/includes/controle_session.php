<?php

session_start();

$usuario = $_SESSION['email'];

if($usuario == null){

    header("Location: ../Login_v18/index.php");
    echo "Faça Login";
    exit;
}

?>