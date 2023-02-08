
<?php 

include 'conexao.php';

// funcao que valida o preenchimento de uma variavel
function validaCampoVazio($campo,$nomedocampo){
    // Exemplo simples de validação de preenchimento de variável
        
    if($campo == ''){
        // criar um array para armazenar a mensagem de erro
        $retorno = array(
            'retorno'=>'erro',
            'mensagem'=>'Preencha o campo '.$nomedocampo.'!'
        );
        // cria um variavel que ira receber o array acima convertido em JSON
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);
        // retorno em formato JSON
        
        echo $json;
        exit;
        // encerra o script
        
    }
}

function insertUpdateDelete($sql,$mensagemretorno){

    $comando= $GLOBALS['conn']->prepare($sql);

    $comando->execute();

    $retorno = array(
                    'retorno'=>'ok',
                    'mensagem'=>$mensagemretorno
                );

    // cria um variavel que ira receber o array acima convertido em JSON
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    // retorno em formato JSON
    echo $json;
}

function pdocatch($erro){
    // Tratamento de erro ou excecao
   $retorno = array(
       'retorno'=>'erro',
       'mensagem'=>$erro->getMessage()
   );

   $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

   echo $json;
}

// funcao que verifica se o email do usuario ja esta cadastrado
function checkEmailUser($email){
    
    // comando SQL que será executado no banco
    $sql = "SELECT email FROM tb_aluno WHERE email = '$email'";

    $comando=$GLOBALS['conn']->prepare($sql);

    $comando->execute();

    $validaEmail = $comando->fetchAll(PDO::FETCH_ASSOC);

    // retorna a variavel validaEmail
    // quando utilizamos return = será retornado um valor pela funcao
    // quando utilizamos echo = é exibido uma informacao na tela
    if($validaEmail != null){
        $retorno = array(
            'retorno'=>'erro',
            'mensagem'=>'E-mail já cadastrado, verifique e tente novamente!'
        );

        // cria um variavel que ira receber o array acima convertido em JSON
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        // retorno em formato JSON
        echo $json;
        exit;
    }

}

// funcao que verifica se o email do usuario ja esta cadastrado
function checkEmailProf($email){
    
    // comando SQL que será executado no banco
    $sql = "SELECT email FROM tb_professor WHERE email = '$email'";

    $comando=$GLOBALS['conn']->prepare($sql);

    $comando->execute();

    $validaEmail = $comando->fetchAll(PDO::FETCH_ASSOC);

    // retorna a variavel validaEmail
    // quando utilizamos return = será retornado um valor pela funcao
    // quando utilizamos echo = é exibido uma informacao na tela
    if($validaEmail != null){
        $retorno = array(
            'retorno'=>'erro',
            'mensagem'=>'E-mail já cadastrado, verifique e tente novamente!'
        );

        // cria um variavel que ira receber o array acima convertido em JSON
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        // retorno em formato JSON
        echo $json;
        exit;
    }

}

function checkCpfProf($cpf){
    
    // comando SQL que será executado no banco
    $sql = "SELECT cpf FROM tb_professor WHERE cpf = '$cpf'";

    $comando=$GLOBALS['conn']->prepare($sql);

    $comando->execute();

    $validaCpf = $comando->fetchAll(PDO::FETCH_ASSOC);

    // retorna a variavel validaEmail
    // quando utilizamos return = será retornado um valor pela funcao
    // quando utilizamos echo = é exibido uma informacao na tela
    if($validaCpf != null){
        $retorno = array(
            'retorno'=>'erro',
            'mensagem'=>'CPF já cadastrado, verifique e tente novamente!'
        );

        // cria um variavel que ira receber o array acima convertido em JSON
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        // retorno em formato JSON
        echo $json;
        exit;
    }

}

function checkCpfUser($cpf){
    
    // comando SQL que será executado no banco
    $sql = "SELECT cpf FROM tb_aluno WHERE cpf = '$cpf'";

    $comando=$GLOBALS['conn']->prepare($sql);

    $comando->execute();

    $validaCpf = $comando->fetchAll(PDO::FETCH_ASSOC);

    // retorna a variavel validaEmail
    // quando utilizamos return = será retornado um valor pela funcao
    // quando utilizamos echo = é exibido uma informacao na tela
    if($validaCpf != null){
        $retorno = array(
            'retorno'=>'erro',
            'mensagem'=>'CPF já cadastrado, verifique e tente novamente!'
        );

        // cria um variavel que ira receber o array acima convertido em JSON
        $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        // retorno em formato JSON
        echo $json;
        exit;
    }

}

// função add dia 25/01/2023

function updateProfessor($sql,$mensagemretorno){

            
    $comando = $GLOBALS['conexao']->prepare($sql);

    $comando->execute();

    // cria um array para armazenar a mensagem de erro
    $retorno = array(
                    'retorno'=>'ok',
                    'mensagem'=> $mensagemretorno
                );

    // cria uma variavel que ira receber o array acima convertido em JSON
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    // retorno em formato JSON
    echo $json;



}

// função add dia 27/01/2023

function updateAluno($sql,$mensagemretorno){

            
    $comando = $GLOBALS['conexao']->prepare($sql);

    $comando->execute();

    // cria um array para armazenar a mensagem de erro
    $retorno = array(
                    'retorno'=>'ok',
                    'mensagem'=> $mensagemretorno
                );

    // cria uma variavel que ira receber o array acima convertido em JSON
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    // retorno em formato JSON
    echo $json;



}


?>
