<?php

// include do arquivo de conexão
include 'includes/functions.php';


try {

    $id = $_POST['id'];

    $sql = "UPDATE tb_professor SET ativo = NOT ativo WHERE id = $id";


    $msg = "Usúario alterado com sucesso!";
    

    insertUpdateDelete($sql, $msg);
} catch (PDOException $erro) {

    pdocatch($erro);
}

// fechar a conexão
$conn = null;
