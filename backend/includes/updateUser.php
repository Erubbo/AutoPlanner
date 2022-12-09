<?php

    include 'include/conexao.php';

    include 'function.php';
    
   
try{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $oper = $_POST['oper'];

    if($oper=='Entrada'){
        $sql = "UPDATE tb_login SET nome=nome+'$nome' WHERE id = $id";
    }else{
        $sql = "UPDATE tb_login SET quantidade=quantidade-'$nome' WHERE id = $id";
    }
    
$msg = "Produto alterado com sucesso";


insertUpdateDelete($sql,$msg);

}catch(PDOException $erro){
    
    pdocatch($erro);

}

// fechar a conexão
$conn = null;

?>