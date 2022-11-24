<?php
include ('conexao.php');

try{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM tb_login
    WHERE email = '$email'
    AND senha = '$senha'
    AND
     BINARY senha='$senha'
     AND ativo = 1";

    $command = $conn-> prepare($sql);

    $command ->execute();

    $dados = $command ->fetchAll(PDO::FETCH_ASSOC);

    if($dados != null){
        session_start();

        $_SESSION['email'] = $email;

        header('Location: ../../tela_prin.php');
    }else{
        header('Location: ../index.php');
    }
}catch(PDOException $error){
    echo $error->getmessage();
}


?>