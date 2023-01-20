<?php
function addevento($disponibilidade){

include 'includes/conexao.php';

try {

    $titulo = $_POST['titulo'];
    $horario_inicio = $_POST['horario_inicio'];
    $horario_fim = $_POST['horario_fim'];
    $comeco = $_POST['comeco'];
    $final = $_POST['final'];

    // executa a função que verifica se o campo está preenchido
    validaCampoVazio($titulo, 'titulo');
    validaCampoVazio($horario_inicio, 'horario_inicio');
    validaCampoVazio($horario_fim, 'horario_fim');
    validaCampoVazio($comeco, 'começo');
    validaCampoVazio($final, 'final');


    $sql = "INSERT INTO tb_eventos (titulo, horario_inicio, horario_fim, comeco, final,) VALUES ('$titulo','$horario_inicio','$horario_fim','$comeco','$final')";

    $command = $conn->prepare($sql);

    $command->execute();

    insertUpdateDelete($sql, $msg);
} catch (PDOException $erro) {

    pdocatch($erro);
}
}