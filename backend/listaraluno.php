<?php


include 'funcao.php';

try{
    // monta a query sql
    $sql = "SELECT id,nome, pai, mae, nome_social, pai_af, mae_af, data_nascimento, genero, nacionalidade, cpf, rg, orgao_emissor, uf, email, telefone, telefone2, senha, id_endereco FROM tb_aluno";

    // prepara a execuçao
    $comando = $con->prepare($sql);

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

$con= null;

?>