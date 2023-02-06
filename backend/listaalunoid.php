<?php

// Listaprofessor criado para fazer o modal funcionar dia 25/01/23
// Select tb alunos e endereço, puxando dados, 26-01

// include 'funcao.php';

include 'includes/conexao.php';

try{
    $id= $_POST['id'];
    // monta a query sql
    $sql = "SELECT a.id as id_aluno, a.nome, a.pai, a.mae, a.nome_social, a.pai_af, a.mae_af, a.data_nascimento, a.genero, a.cpf, a.rg, a.orgao_emissor, a.uf, a.email, a.telefone, a.telefone2, a.ativo, e.id, e.cep, e.logradouro, e.numero, e.complemento, e.bairro, e.municipio, e.estado, e.ativo FROM tb_aluno a INNER JOIN tb_endereco e on e.id = a.id_endereco  where a.id=$id";

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