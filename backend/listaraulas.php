<?php


// include '../backend/includes/functions.php';

// // include '../backend/includes/conexao.php';

// try{
    // monta a query sql
    include '../backend/includes/conexao.php';
    
    try{
        // $id = $_POST['id'];
        // monta a query
        
        $sql = "SELECT 
		COUNT(c.id) AS total,
		a.nome,
		h.total_aula,
		h.total_aula - COUNT(c.id) AS faltando,
		ca.tipo
	FROM 
		tb_calendario c
	INNER JOIN 
		tb_aluno	a
		ON c.id_aluno = a.id
	INNER JOIN 
		tb_historico h
		ON c.id_aluno = h.id_aluno
	INNER JOIN	
		tb_carta ca
		ON c.id_carta = ca.id
	
	WHERE 
		a.id = 2";


        // $sql = "SELECT p.id as id_professor, p.nome, p.data_nascimento, p.genero, p.nacionalidade, p.cpf, p.rg, p.orgao_emissor, p.uf, p.email, p.telefone, p.telefone2, p.senha, p.ativo, p.id, e.cep, e.logradouro, e.numero, e.complemento, e.bairro, e.municipio, e.estado, e.ativo FROM tb_professor p INNER JOIN tb_endereco e on e.id = p.id_endereco where p.id=$id";

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