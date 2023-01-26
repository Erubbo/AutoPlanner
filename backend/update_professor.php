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


// adicionado 25/01/2023

try {

    // define os caracteres que iremos remover dos campos preenchidos no form (replace)
    $limpa = array('(',')','-',' ','.');

    $nome            = $_POST['edita-nome'];
    $data_nascimento = $_POST['edita-data_nascimento'];
    $genero          = $_POST['edita-genero'];
    $nacionalidade   = $_POST['edita-nacionalidade'];
    $cpf             = str_replace($limpa,'',$_POST['edita-cpf']);
    $rg              = str_replace($limpa,'',$_POST['edita-rg']);;
    $orgao_emissor   = $_POST['edita-orgao_emissor'];
    $uf              = $_POST['edita-uf'];
    $email           = $_POST['edita-email'];
    $confirma_email  = $_POST['edita-confirma_email'];
    $telefone        = str_replace($limpa,'',$_POST['edita-telefone']);
    $telefone2       = str_replace($limpa,'',$_POST['edita-telefone2']);
    $senha           = $_POST['edita-senha'];
    $confirmar       = $_POST['edita-confirmar'];

    //endereço
    $cep             = str_replace($limpa,'',$_POST['edita-cep']);
    $logradouro      = $_POST['edita-logradouro'];
    $numero          = str_replace($limpa,'',$_POST['edita-numero']);
    $complemento     = $_POST['edita-complemento'];
    $bairro          = $_POST['edita-bairro'];
    $municipio       = $_POST['edita-municipio'];
    $estado          = $_POST['edita-estado'];


    // executa a função que verifica se o campo está preenchido
    validaCampoVazio($nome, 'edita-nome');
    validaCampoVazio($data_nascimento, 'edita-data_nascimento');
    validaCampoVazio($nacionalidade, 'edita-nacionalidade');
    validaCampoVazio($cpf, 'edita-cpf');
    validaCampoVazio($rg, 'edita-rg');
    validaCampoVazio($orgao_emissor, 'edita-orgao_emissor');
    validaCampoVazio($uf, 'edita-uf');
    validaCampoVazio($telefone, 'edita-telefone');
    validaCampoVazio($email, 'edita-email');
    validaCampoVazio($senha, 'edita-senha');
    validaCampoVazio($confirmar, 'edita-confirmar senha');

    // executa a funcao que verifica se o email já está cadastrado
    checkEmailProf($email);
    // executa a função que verifica se o cpf já esta cadastrado
    checkCpfProf($cpf);


    if ($senha != $confirmar) {
        // criar um array para armazenar a mensagem de erro
        $retorno = array(
            'retorno' => 'erro',
            'mensagem' => 'Senhas não conferem, verifique e tente novamente'
        );

        // cria um variavel que ira receber o array acima convertido em JSON
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        // retorno em formato JSON
        echo $json;
        // encerra o script
        exit;
    }

    // Criptografa a senha do usuario
    // alguns algo de cript: sha1, md5, password hash php
    $senha =  sha1($senha);


    // add endereço 
    $sql = "UPDATE tb_endereco (cep,logradouro,numero,complemento,bairro,municipio,estado)";

    // $command = $conn->prepare($sql);

    // $command->execute();

    // captura o id da tabela do comandoi executado acima 
    // necessario id para insert na tabela de endereços 
    // $id_endereco = $conn->listarprofessor();

    $sql = "UPDATE tb_professor (nome,data_nascimento,genero,nacionalidade,cpf,rg,orgao_emissor,uf,email,telefone,telefone2,senha,id_endereco)";

    $msg = "Usuário alterar com sucesso!";

    insertUpdateDelete($sql, $msg);
    
} catch (PDOException $erro) {
    pdocatch($erro);
}

// Fechar a conexao
$conn = null;
