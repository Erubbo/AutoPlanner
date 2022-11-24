
<?php 

include 'includes/conexao.php';

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



?>
