<?php
include 'include/conexao.php';

try{

    $id = $_POST['id'];


    // monta a query sql
    $sql = "SELECT id,nome,email,data_cadastro FROM tb_login WHERE id=id";

    // prepara a execução
    $comando = $conn->prepare($sql);

    // executa o comando
    $comando ->execute();

    // variavel que ira guardar o result da execução do comando
    $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;



}catch(PDOException $erro){

    // cria um array para armazenar a mensagem de erro
    $retorno = array(
                    'retorno'=>'erro',
                    'mensagem'=>$erro->getMessage()
                );

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    echo $json;

}

// fechar a conexão
    $conexao = null;


?>

