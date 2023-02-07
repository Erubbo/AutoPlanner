<?php

include 'conexao.php';

try {


    $nome = $_POST['nome_f'];
    $data = $_POST['data_i'];
    $data_fim = $_POST['data_f'];
    
    // executa a função que verifica se o campo está preenchido
    validaCampoVazio($nome, 'nome_f');
    validaCampoVazio($data, 'data_i');
    validaCampoVazio($data_fim, 'data_f');
    

    $sql = "INSERT INTO tb_feriados (nome_f, data_i, data_f) VALUES ('$nome','$data','$data_fim')";

    $msg = "Feriado cadastrado com sucesso!";

    insertUpdateDelete($sql, $msg);
    
} catch (PDOException $erro) {
    pdocatch($erro);
}

// Fechar a conexao
$conn = null;
