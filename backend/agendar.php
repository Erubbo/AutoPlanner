<?php

date_default_timezone_set('America/Sao_Paulo');
include 'includes/conexao.php';


try{
    $id_aluno = $_POST['id_aluno'];
    $id_carta = $_POST['id_carta'];
    $aulas = $_POST['aulas'];
    $id_professor = $_POST['id_professor'];



    $dia_hoje = date('w');



    // monta a query sql
    $sql = "SELECT dia_semana FROM tb_disponibilidade where id_aluno = $id_aluno AND dia_semana > '$dia_hoje' ORDER BY hora_inicio LIMIT 1";
    // prepara a execuçao
    $comando = $conn->prepare($sql);
    // executa o comando 
    $comando->execute();
    // Variavel que ira guardar o resultado da execução do comando 
    $dados = $comando->fetch(PDO::FETCH_ASSOC);
    $proximo_dia_dispo=$dados['dia_semana'];


// ========================================= LAÇO
    $sql = "SELECT * FROM tb_disponibilidade where id_aluno = $id_aluno AND dia_semana ='$proximo_dia_dispo' ORDER BY hora_inicio";
    // prepara a execuçao
    $comando = $conn->prepare($sql);
    // executa o comando 
    $comando->execute();
    // Variavel que ira guardar o resultado da execução do comando 
    $dados_disponibilidade = $comando->fetchAll(PDO::FETCH_ASSOC);

    echo"<pre>";
   var_dump($dados_disponibilidade);


}catch(PDOException $erro){
    pdocatch($erro);

}