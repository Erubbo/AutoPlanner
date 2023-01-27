<?php

// Listaprofessor criado para fazer o modal funcionar dia 24/01/23
// Select tb alunos e endereço, puxando dados, 26-01

// include 'funcao.php';

include 'includes/conexao.php';

    try{
        $id= $_POST['id'];
        // monta a query sql
        $sql = "SELECT p.id as id_professor, p.nome, p.data_nascimento, p.genero, p.nacionalidade, p.cpf, p.rg, p.orgao_emissor, p.uf, p.email, p.telefone, p.telefone2, p.ativo, p.id, e.cep, e.logradouro, e.numero, e.complemento, e.bairro, e.municipio, e.estado, e.ativo FROM tb_professor p INNER JOIN tb_endereco e on e.id = p.id_endereco where p.id=$id";

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