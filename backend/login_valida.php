<?php
include ('includes/conexao.php');

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

        header('Location: ../principal.php');
    }else{
        // header('Location: ../login_v18/index.html');
    }
}catch(PDOException $error){
    echo $error->getmessage();
}


?>