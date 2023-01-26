<?php

// Listaprofessor criado para fazer o modal funcionar dia 25/01/23

// include 'funcao.php';

include 'includes/conexao.php';

try{
    $id= $_POST['id'];
    // monta a query sql
    $sql = "SELECT id,nome,pai, mae, nome_social, pai_af, mae_af,data_nascimento,genero,nacionalidade,cpf,rg,orgao_emissor,uf,email,telefone,telefone2,senha,ativo FROM tb_aluno INNER JOIN tb_endereco on tb_endereco.id =tb_aluno.id_endereco";

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