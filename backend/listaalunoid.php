<?php

// Listaprofessor criado para fazer o modal funcionar dia 25/01/23

// include 'funcao.php';

include 'includes/conexao.php';

try{
    $id= $_POST['id'];
    // monta a query sql
    $sql = "SELECT id, nome, email, telefone, data_cadastro, ativo FROM tb_aluno where id=$id";

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