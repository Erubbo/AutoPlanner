<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='calendar/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/estilo-altura-fundo.css">

</head>

<body class="body-imagem">

    <!-- COMEÇO NAVBAR -->

    <nav class="navbar navbar-expand-lg text-bg-light text-dark shadow-sm p-0 mb-5 bg-white " id="scrollspyHeading1" style="z-index:100">
        <div class="container-fluid position-relative">
            <a class="navbar-brand" href="../../../AutoPlanner/tela_prin.php">
                <img src="images/logo_tipo.png" alt="" width="140px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fs-6 fw-bold" aria-current="page" href="../../../AutoPlanner/tela_prin.php">Agenda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/cadastro_alunos.php">Aluno</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/cadastro_professor.php">Professor</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consultar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/consultar_alunos.php">Aluno</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/consultar_professor.php">Professor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/consultar_aulas.php">Aulas</a></li>
                        </ul>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link active fs-6 fw-bold" aria-current="page" href="../../../AutoPlanner/backend/front/gerar_aulas.php">Gerar Aulas</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link active fs-6 fw-bold" aria-current="page" href="../../../AutoPlanner/backend/front/cadastro_feriados.php">Feriados</a>
                    </li>

                    <!-- Contabilidade 25/01/2023  -->
                    <li class="nav-item">
                        <a class="nav-link active fs-6 fw-bold" aria-current="page" href="#"></a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- <form class="d-flex" role="buscar">
    <input class="input-group input-group-sm mb-3 form-control mt-3" type="search" placeholder="Buscar" aria-label="buscar">
    <a href="backend/"> <button class="btn btn-outline-dark mt-3 me-2" type="submit"><i class="bi bi-search"></i></button></a>
  </form> -->

        <div class="dropdown">
            <a class="btn dropdown-toggle m-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="" class="rounded-circle" height="26" alt="" loading="lazy" />
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item text-center p-0" href="backend/">Editar Perfil</a></li>
                <li><a class="dropdown-item text-center p-0" href="backend/logout.php">Sair</a></li>
            </ul>
        </div>


    </nav>

    <!-- FINAL NAVBAR -->

    <h5 class="text-center text-light mb-4"><i class="bi bi-journal-bookmark" style="font-size: 1.5rem"></i> Agenda</h5>

    <div class="container-fluid row m-auto p-auto">

        <div id='calendar1' class="col-8 fundo p-2"></div>
        <div class="col-4">

            <div id='calendar2' class="fundo p-2"></div>


            <div id='calendar3'></div>

        </div>

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