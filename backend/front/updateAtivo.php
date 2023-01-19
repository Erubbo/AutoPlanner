<?php

// include do arquivo de conexao
    include 'functions.php';

    try{

        $id  = $_POST['id'];
       
        $sql = "UPDATE tb_usuarios SET ativo = NOT ativo WHERE id = $id";

        $msg = "Usuário alterado com sucesso!";

        insertUpdateDelete($sql,$msg);

    }catch(PDOException $erro){

       pdocatch($erro);

    }
    // Fechar a conexao
    $con = null;
?>
