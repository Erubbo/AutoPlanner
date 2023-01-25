<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='calendar/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/estilo-alunos.css">

</head>

<body class="body-imagem">
    <?php
    include('backend/includes/navbar.php')

    ?>
    <div class="container-fluid row ">

        <div id='calendar1' class="col-8 fundo"></div>
        <div class="col-4">

            <div id='calendar2' class="fundo"></div>


            <div id='calendar3'></div>

        </div>
        <a href="backend/logout.php"><button type="submit" class="btn btn-secondary mt-3" onclick="addaluno()">Sair</button></a>
    </div>

    <?php

    include('backend/includes/footer.php')
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src='calendar/main.js'></script>
    <script src="calendar/locales-all.js"></script>
    <script src="js/calendario.js"></script>

</body>

</html>