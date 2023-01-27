<?php

// include do arquivo de conexao
include 'includes/functions.php';

try {

    // define os caracteres que iremos remover dos campos preenchidos no form (replace)
    $limpa = array('(',')','-',' ','.');

    $nome_do_feriado           = $_POST['nome_do_feriado'];
    $data_inicio = $_POST['data_inicio'];
    $data_final        = $_POST['data_final'];

    // executa a função que verifica se o campo está preenchido
    validaCampoVazio($nome_do_feriado, 'nome_do_feriado');
    validaCampoVazio($data_inicio, 'data_inicio');
    validaCampoVazio($data_final, 'Data_final');

    if ($nome == $nome) {
        // criar um array para armazenar a mensagem de erro
        $retorno = array(
            'retorno' => 'erro',
            'mensagem' => 'Nome ja existe, verifique e tente novamente'
        );

        // cria um variavel que ira receber o array acima convertido em JSON
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        // retorno em formato JSON
        echo $json;
        // encerra o script
        exit;
    }

    // add feriados 
    $sql = "INSERT INTO tb_feriados (nome,data,data_fim) VALUES ('$nome','$data','$data_fim')";

    $command = $conn->prepare($sql);

    $command->execute();

    // captura o id da tabela do comandoi executado acima 
    // necessario id para insert na tabela feriados
    $id_nome = $conn->lastInsertId();

    $sql = "INSERT INTO tb_feriados (nome,data,data_fim) VALUES ('$nome','$data','$data_fim')";

    $msg = "Feriado adicionado com sucesso!";

    insertUpdateDelete($sql, $msg);
    
} catch (PDOException $erro) {
    pdocatch($erro);
}

// Fechar a conexao
$conn = null;