<?php

include 'includes/conexao.php';
include 'includes/functions.php';

try {


    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $data_fim = $_POST['data_fim'];
    
    // executa a função que verifica se o campo está preenchido
    validaCampoVazio($nome, 'nome_f');
    validaCampoVazio($data, 'data_i');
    validaCampoVazio($data_fim, 'data_f');
    

    $sql = "INSERT INTO tb_disponibilidade (nome, `data`, data_fim) VALUES ('$nome','$data','$data_fim')";

    $msg = "Feriado cadastrado com sucesso!";

    insertUpdateDelete($sql, $msg);
    
} catch (PDOException $erro) {
    pdocatch($erro);
}

// Fechar a conexao
$conn = null;
