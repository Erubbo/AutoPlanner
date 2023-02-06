<?php


// include '../backend/includes/functions.php';

// // include '../backend/includes/conexao.php';

// try{
//     // monta a query sql
//     $sql = "SELECT id_aluno, total_aula, id_carta FROM tb_historico";
include '../backend/includes/conexao.php';

try{
    // monta a query
    $sql = "SELECT id FROM tb_disponibilidade";

    // prepara a execuçao
    $comando = $conn->prepare($sql);

    // executa o comando
    $comando->execute();

    // variavel que ira guardar o resultado daexecução do comando
    $retorno = $comando->fetchAll(PDO::FETCH_ASSOC);

    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    // retorno em formato json
    echo $json;

    
} catch (PDOException $erro) {
    $retorno = array(
        'retorno'=>'erro',
        'mensagem'=>$erro->getMessage()
    );
    
    $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

    // retorno em formato json
    echo $json;

}

$conn = null;

?>