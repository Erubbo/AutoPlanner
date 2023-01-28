<?php
include '../includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Aulas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/estilo-altura-fundo.css">



</head>

<body class="body-imagem">
    <?php
    include('../includes/navbar.php')
    ?>

    <h5 class="text-center text-light"><i class="bi bi-person-circle" style="font-size: 1.5rem"></i> Consultar Aulas</h5>

    <!-- ////////////////////////// Datatable para listagem de dados ////////////////////////////// -->
    <div class="border rounded mt-4 p-2 bg-secondary altura-minima">

        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="" aria-label="Pesquisar" aria-describedby="btnNavbarSearch" />
                <button class="btn btn-light" id="btnNavbarSearch" type="submit">Nome do Aluno</button>
            </div>
        </form>

        <button class="btn btn-primary btn-sm" onclick="listaraulas()"><i class="bi bi-arrow-clockwise"></i></button>

        <table class="table table-secondary table-striped mt-4 dt-responsive " id="tabela">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Quantidade de aulas registradas</th>
                    <th>Aulas Feitas</th>
                    <th>Aulas Faltantes</th>
                </tr>
            </thead>
            <tbody id="listar-aulas">

            </tbody>
        </table>
    </div>

    <?php
    include('../includes/footer.php')
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="../assets/js/listar-aulas.js"></script>
</body>

</html>