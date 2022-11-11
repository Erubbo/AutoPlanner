<?php

// include do arquivo de conexao
    include 'includes/functions.php';

    try{

        // define os caracteres que iremos remover dos campos preenchidos no form (replace)
        $carac = array('(',')','-',' ','.');

        $nome       = $_POST['nome'];
        $email      = $_POST['email'];
        $telefone   = str_replace($carac,"",$_POST['telefone']);
        $cpf        = str_replace($carac,"",$_POST['cpf']);         
        $senha      = $_POST['senha'];
        $confirmar  = $_POST['confirmar'];

        
        // executa a função que verifica se o campo está preenchido
        validaCampoVazio($nome,'nome');
        validaCampoVazio($email,'email');
        validaCampoVazio($telefone,'telefone');
        validaCampoVazio($cpf,'cpf');
        validaCampoVazio($senha,'senha');
        validaCampoVazio($confirmar,'confirmar senha');

    

        if($senha != $confirmar){
            // criar um array para armazenar a mensagem de erro
            $retorno = array(
                            'retorno'=>'erro',
                            'mensagem'=>'Senhas não conferem, verifique e tente novamente'
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
        
        $sql = "INSERT INTO tb_usuarios (nome, email, telefone, cpf, senha) VALUES ('$nome','$email','$telefone','$cpf','$senha')";

        $msg = "Usuário adicionado com sucesso!";

        insertUpdateDelete($sql,$msg);   


    }catch(PDOException $erro){
        pdocatch($erro);
    }

    // Fechar a conexao
    $con = null;
    


?>