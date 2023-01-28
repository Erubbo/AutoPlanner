<?php

// include do arquivo de conexão
include 'includes/functions.php';

try {

    // define os caracteres que iremos remover dos campos preenchidos no form (replace)
    $limpa = array('(',')','-',' ','.');

    // aluno 
    $id_aluno        =$_POST['edita_id_aluno'];
    $nome            = $_POST['edita-nome'];
    $pai             = $_POST['edita-pai'];
    $mae             = $_POST['edita-mae'];
    $nome_social     = $_POST['edita-nome_social'];
    $pai_af          = $_POST['edita-pai_af'];
    $mae_af          = $_POST['edita-mae_af'];
    $data_nascimento = $_POST['edita-data_nascimento'];
    $genero          = $_POST['edita-genero'];
    // $nacionalidade   = $_POST['edita-nacionalidade'];
    $cpf             = str_replace($limpa,'',$_POST['edita-cpf']);
    $rg              = str_replace($limpa,'',$_POST['edita-rg']);
    $orgao_emissor   = $_POST['edita-orgao_emissor'];
    $uf              = $_POST['edita-uf'];
    $email           = $_POST['edita-email'];
    // $confirma_email  = $_POST['confirma_email'];
    $telefone        = str_replace($limpa,'',$_POST['edita-telefone']);
    $telefone2       = str_replace($limpa,'',$_POST['edita-telefone2']);
    // $senha           = $_POST['senha'];
    // $confirmar       = $_POST['confirmar'];

    // endereço
    $id_endereco     =$_POST['edita_id_endereco'];
    $cep = str_replace($limpa,'',$_POST['edita-cep']);
    $logradouro = $_POST['edita-logradouro'];
    $numero = str_replace($limpa,'',$_POST['edita-numero']);
    $complemento = $_POST['edita-complemento'];
    $bairro = $_POST['edita-bairro'];
    $municipio = $_POST['edita-municipio'];
    $estado = $_POST['edita-estado'];

    // executa a função que verifica se o campo está preenchido
    validaCampoVazio($nome, 'edita-nome');
    validaCampoVazio($data_nascimento, 'edita-data_nascimento');
    // validaCampoVazio($nacionalidade, 'edita-nacionalidade');
    validaCampoVazio($cpf, 'edita-cpf');
    validaCampoVazio($rg, 'edita-rg');
    validaCampoVazio($orgao_emissor, 'edita-orgao_emissor');
    validaCampoVazio($uf, 'edita-uf');
    validaCampoVazio($telefone, 'edita-telefone');
    validaCampoVazio($email, 'edita-email');
    
    // endereço
     validaCampoVazio($cep, 'edita-cep');
     validaCampoVazio($numero, 'edita-numero');


   
    // add endereço 
    $sql = "UPDATE tb_endereco SET cep='$cep',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',municipio='$municipio',estado='$estado'  WHERE id = '$id_endereco' ";

    $command = $conn->prepare($sql);

    $command-> execute();

    // captura o id da tabela do comandoi executado acima 
    // necessario id para insert na tabela de endereços 
    // $id_endereco = $conn-> lastInsertId();

    
    $sql = "UPDATE tb_aluno SET nome='$nome',pai='$pai',mae='$mae',nome_social='$nome_social',pai_af='$pai_af',mae_af='$mae_af',data_nascimento='$data_nascimento',genero='$genero',nacionalidade='$nacionalidade',cpf='$cpf',rg='$rg',orgao_emissor='$orgao_emissor',uf='$uf',email='$email',telefone='$telefone',telefone2='$telefone2' WHERE id = '$id_aluno' "; 

    $msg = "Usuário adicionado com sucesso!";

    insertUpdateDelete($sql, $msg);

} catch (PDOException $erro) {
    pdocatch($erro);
}

// Fechar a conexao
$conn = null;

?>
    