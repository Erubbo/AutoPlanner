<?php

session_start();

$usuario = $_SESSION['email'];

if($usuario == null){

    header("Location: ../../index.php");
    echo "Faça Login";
    exit;
}

?>