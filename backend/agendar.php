<?php

date_default_timezone_set('America/Sao_Paulo');
include 'includes/conexao.php';


try{
    $id_aluno = $_POST['id_aluno'];
    $id_carta = $_POST['id_carta'];
    $aulas = $_POST['aulas'];
    $id_professor = $_POST['id_professor'];

    $dia_hoje_semana = date('w');
    
    $semana = array(
       '1' => 'monday',
       '2' => 'tuesday ',
       '3' => 'wednesday ',
       '4' => 'thursday ',
       '5' => 'friday ',
       '6' => 'saturday '
   );
   // variavel para escrever o dia por extenso
   $oi = $semana[$dia_hoje_semana];

   
   
    $dia_hoje_mes = new DateTime();
       

    
    $proximo_dia_agendamento = $dia_hoje_mes->modify('next '.$oi);
    
    echo $proximo_dia_agendamento->format('Y-m-d');


    // monta a query sql
    $sql = "SELECT * FROM tb_disponibilidade where id_aluno = $id_aluno ORDER BY dia_semana,hora_inicio";
    // prepara a execuçao
    $comando = $conn->prepare($sql);
    // executa o comando 
    $comando->execute();
    // Variavel que ira guardar o resultado da execução do comando 
    $dados = $comando->fetchAll(PDO::FETCH_ASSOC);

    echo"<pre>";
    var_dump($dados);

// // ========================================= LAÇO
//     $sql = "SELECT * FROM tb_disponibilidade where id_aluno = $id_aluno AND dia_semana ='$proximo_dia_dispo' ORDER BY hora_inicio";
//     // prepara a execuçao
//     $comando = $conn->prepare($sql);
//     // executa o comando 
//     $comando->execute();
//     // Variavel que ira guardar o resultado da execução do comando 
//     $dados_disponibilidade = $comando->fetchAll(PDO::FETCH_ASSOC);

//     echo"<pre>";
//    var_dump($dados_disponibilidade);







    // $sql = "SELECT id FROM tb_professor WHERE id= '$id_professor'"

    // $sql = "INSERT INTO tb_calendario (id_aluno,id_carta,id_professor,dias,hora_inicio,hora_final) values('$id_aluno','$id_carta','$dias','$hora_inicio','$hora_final')";




}catch(PDOException $erro){
    pdocatch($erro);

}