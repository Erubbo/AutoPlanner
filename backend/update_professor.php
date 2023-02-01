
<?php

include 'includes/functions.php';

// adicionado 25/01/2023

try {

    // var_dump($_POST);
    // exit;
    // define os caracteres que iremos remover dos campos preenchidos no form (replace)
    $limpa = array('(',')','-',' ','.');

    $id_professor    =$_POST['edita_id_professor'];
    $nome            = $_POST['edita-nome'];
    $data_nascimento = $_POST['edita-data_nascimento'];
    $genero          = $_POST['edita-genero'];
    // $nacionalidade   = $_POST['edita-nacionalidade'];
    $cpf             = str_replace($limpa,'',$_POST['edita-cpf']);
    $rg              = str_replace($limpa,'',$_POST['edita-rg']);;
    $orgao_emissor   = $_POST['edita-orgao_emissor'];
    $uf              = $_POST['edita-uf'];
    $email           = $_POST['edita-email'];
    // $confirma_email  = $_POST['edita-confirma_email'];
    $telefone        = str_replace($limpa,'',$_POST['edita-telefone']);
    $telefone2       = str_replace($limpa,'',$_POST['edita-telefone2']);

    //endereço
    $id_endereco     =$_POST['edita_id_endereco'];
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
    // validaCampoVazio($nacionalidade, 'edita-nacionalidade');
    validaCampoVazio($cpf, 'edita-cpf');
    validaCampoVazio($rg, 'edita-rg');
    validaCampoVazio($orgao_emissor, 'edita-orgao_emissor');
    validaCampoVazio($uf, 'edita-uf');
    validaCampoVazio($telefone, 'edita-telefone');
    validaCampoVazio($email, 'edita-email');
    


    // add endereço 
    $sql = "UPDATE tb_endereco SET cep='$cep',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',municipio='$municipio',estado='$estado' WHERE id = '$id_endereco' ";

    $command = $conn->prepare($sql);

    $command->execute();

    

    $sql = "UPDATE tb_professor SET nome='$nome',data_nascimento='$data_nascimento',genero='$genero',cpf='$cpf',rg='$rg',orgao_emissor='$orgao_emissor',uf='$uf',email='$email',telefone='$telefone',telefone2='$telefone2' WHERE id = '$id_professor'";

    $msg = "Usuário alterado com sucesso!";

    insertUpdateDelete($sql, $msg);
    
    echo $sql;
    exit;

} catch (PDOException $erro) {
    pdocatch($erro);
}

// Fechar a conexao
$conn = null;

?>