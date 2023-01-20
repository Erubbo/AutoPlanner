<?php
// include do arquivo de conexao
include 'include/conexao.php';


try {
    $token = $_GET['token'];

    // exemplo de update usando inner join
    // altera o usuario para ativo = 1, usando como base o token de ativação
    $sql = "UPDATE 
            tb_usuarios u
            INNER JOIN
            tb_usuarios_token t
            ON t.fk_id_usuarios = u.id 
            set u.ativo = 1
            WHERE t.token = '$token'";

    $comando = $con->prepare($sql);
    $comando->execute();
    
    // rowCount é uma função que retorna o numero de linhas afetadas com o sql executado

    $retorno = $comando->rowCount();



} catch (PDOException $erro) {
    $retorno = 0;
}


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Senac - Ativação do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <div class="alert <?php echo $retorno != 0? 'alert-success' : 'alert-danger' ?>" role="alert">
            <?php echo $retorno != 0 ? '<p> Cadastro ativado com sucesso!<p>' : 'Erro ao ativar cadastro'; ?>
            <a href="../index.html">
                <button type="button" class="btn btn-primary">Acessar sistema</button>
            </a>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>