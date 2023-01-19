<?php


// include 'funcao.php';

include 'includes/conexao.php';

try{
    // monta a query sql
    $sql = "SELECT id,nome,data_nascimento,genero,nacionalidade,cpf,rg,orgao_emissor,uf,email,telefone,telefone2,senha,id_endereco FROM tb_professor";

    // prepara a execuçao
    $comando = $conn->prepare($sql);

    // executa o comando 
    $comando->execute();

    // Variavel que ira guardar o resultado da execução do comando 
    $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    // retorno em formato json
    echo $json;




}catch(PDOException $erro){
    $retorno = array(
            'retorno'=>'erro',
            'mensagem'=>$erro->getMessage()
    );
    
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

        // retorno em formato json
        echo $json;
}

$conn= null;

?>