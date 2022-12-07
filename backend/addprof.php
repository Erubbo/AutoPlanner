<?php

// include do arquivo de conexao
include 'includes/functions.php';

try {

    // define os caracteres que iremos remover dos campos preenchidos no form (replace)
    $limpa = array('(',')','-',' ','.');

    $nome            = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero          = $_POST['genero'];
    $nacionalidade   = $_POST['nacionalidade'];
    $cpf             = str_replace($limpa,'',$_POST['cpf']);
    $rg              = str_replace($limpa,'',$_POST['rg']);;
    $orgao_emissor   = $_POST['orgao_emissor'];
    $uf              = $_POST['uf'];
    $email           = $_POST['email'];
    $confirma_email  = $_POST['confirma_email'];
    $telefone        = str_replace($limpa,'',$_POST['telefone']);
    $telefone2       = str_replace($limpa,'',$_POST['telefone2']);
    $senha           = $_POST['senha'];
    $confirmar       = $_POST['confirmar'];

    //endereço
    $cep             = str_replace($limpa,'',$_POST['cep']);
    $logradouro      = $_POST['logradouro'];
    $numero          = str_replace($limpa,'',$_POST['numero']);
    $complemento     = $_POST['complemento'];
    $bairro          = $_POST['bairro'];
    $municipio       = $_POST['municipio'];
    $estado          = $_POST['estado'];


    // executa a função que verifica se o campo está preenchido
    validaCampoVazio($nome, 'nome');
    validaCampoVazio($data_nascimento, 'data_nascimento');
    validaCampoVazio($nacionalidade, 'nacionalidade');
    validaCampoVazio($cpf, 'cpf');
    validaCampoVazio($rg, 'rg');
    validaCampoVazio($orgao_emissor, 'orgao_emissor');
    validaCampoVazio($uf, 'uf');
    validaCampoVazio($telefone, 'telefone');
    validaCampoVazio($email, 'email');
    validaCampoVazio($senha, 'senha');
    validaCampoVazio($confirmar, 'confirmar senha');




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
    $sql = "INSERT INTO Tb_endereco (cep,logradouro,numero,complemento,bairro,municipio,estado) VALUES ('$cep','$logradouro','$numero','$complemento','$bairro','$municipio','$estado')";

    $command = $conn->prepare($sql);

    $command->execute();

    // captura o id da tabela do comandoi executado acima 
    // necessario id para insert na tabela de endereços 
    $id_endereco = $conn->lastInsertId();

    $sql = "INSERT INTO tb_professor (nome,data_nascimento,genero,nacionalidade,cpf,rg,orgao_emissor,uf,email,telefone,telefone2,senha,id_endereco) VALUES ('$nome','$data_nascimento','$genero','$nacionalidade','$cpf','$rg','$orgao_emissor','$uf','$email','$telefone','$telefone2','$senha',$id_endereco)";

   

    $msg = "Usuário adicionado com sucesso!";

    insertUpdateDelete($sql, $msg);
} catch (PDOException $erro) {
    pdocatch($erro);
}

// Fechar a conexao
$conn = null;
