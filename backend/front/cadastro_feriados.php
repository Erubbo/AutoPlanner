<?php
include '../includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de feriados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../css/horarios.css">
    <link rel="stylesheet" href="../../css/estilo-altura-fundo.css">


</head>

<body class="body-imagem">

    <?php
    include('../includes/navbar.php')
    ?>

    <div class="container altura-minima">

        <h5 class="text-center m-4 text-light bi bi-calendar-date"> Cadastro Feriados</h5>


        <div class="text-bg-secondary p-3 border border-3 rounded-3 ">

            <div class="form-group m-4 mt-2">
                <form id="form-feriado">

                    <div class="group m-4 ">

                        <div class="row ">

                            <div class="form-group col-md-4 ">
                                <h6 class="mb-1"><i class="bi bi-file-richtext" style="font-size: 1.5rem"></i>SOBRE O FERIADO:</h6>
                                <label class="mt-3" for="nome">Nome do Feriado</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                            </div>

                            <div class="form-group col-md-4 mt-5">
                                <label class="" for="data">Data Inicial</label>
                                <input type="date" class="form-control" id="data" name="data" placeholder="">
                            </div>



                            <div class="form-group col-md-4 mt-5">
                                <label class="" for="data_fim">Data Final</label>
                                <input type="date" class="form-control" id="data_fim" name="data_fim" placeholder="">
                            </div>

                        </div>

                        <div class="form-group col-md-6">
                            <button type="button" class="btn btn-primary mt-3" onclick="addferiado()">Cadastrar</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>

    </div>
    </div>

    <?php
    include('../includes/footer.php')
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Importação JS - Datatable -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- SWEET ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- INPUT MASK -->
    <script src="../assets/js/jquery.inputmask.min.js"></script>


    <script src="../assets/js/addferiado.js"></script>
</body>


</html>