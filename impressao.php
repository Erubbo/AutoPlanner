<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">


</head>

<body>
    <?php
    include('backend/includes/navbar.php')
    ?>
    <div class="container">
    <div class="border rounded mt-4 p-2">
      <table id="alunos" class="table table-primary table-striped dt-responsive  w-100">
        <thead>
        <tr>
                <th>Nome</th>
                <th>Nome Social</th>
                <th>Data Nascimento</th>
                <th>Gênero</th>
                <th>CPF</th>
                <th>Função</th>
               
            </tr>
        </thead>
        <tbody id="listar-alunos">
       

        </tbody>


    </div>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
    <script src="js/data_table.js"></script>
</body>

</html>