<?php

include 'includes/functions.php';

try{
    $nome = $_POST['nome'];
    $cnh = $_POST['cnh'];
    $aulas = $_POST['aulas'];
    $professores = $_POST['professores'];


    $sql = "INSERT INTO tb_calendario (id_aluno,id_carta,id_professor) VALUES ('$nome','$cnh', '$professores', '$data', '$hora_inicio', '$hora_final')";

    $command = $conn->prepare($sql);

    $command->execute();

    insertUpdateDelete($sql, $msg);

}catch(PDOException $erro){
    pdocatch($erro);

}