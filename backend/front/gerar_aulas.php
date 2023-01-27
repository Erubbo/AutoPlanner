<?php
include '../includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Aulas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/horarios.css">
    <link rel="stylesheet" href="../../css/estilo-alunos.css">


</head>

<body class="body-imagem">
    <?php
    include('../includes/navbar.php')
    ?>

    <div class="container altura-minima">

        <h5 class="text-center m-4 text-dark"><i class="bi bi-bar-chart-line" style="font-size: 1.5rem"></i> Gerar Aulas</h5>


        <div class="text-bg-secondary p-3 border border-3 rounded-3 ">

            <div class="form-group m-4 mt-2">
                <form id="form-aluno">

                    <div class="group m-4 ">

                        <div class="row ">

                            <div class="form-group col-md-6 ">
                                <h6 class=""><i class="bi bi-file-richtext" style="font-size: 1.5rem"></i>SOBRE O ALUNO :</h6>
                                <label class="mt-4" for="nome">Nome Completo do Aluno</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>

                            <div class="form-group col-md-6">
                                <h6 class=""><i class="bi bi-card-heading" style="font-size: 1.5rem"></i> CNH:</h6>
                                <label class="mt-4" for="cnh">Categorias da CNH</label>
                                <select class="form-select" aria-label="Default select example" id="cnh" name="cnh">
                                    <option value="0" disabled selected>Selecione...</option>
                                    <option value="A">A - MOTOS E TRICICLOS</option>
                                    <option value="B">B - CARROS</option>
                                    <option value="C">C - VEÍCULO DE CARGA ACIMA DE 3,5 TON.</option>
                                    <option value="D">D - VEÍCULO COM + DE 8 PASSAGEIROS</option>
                                    <option value="E">E - VEÍCULO COM UNIDADE ACOPLADA ACIMA DE 6 TON. </option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <hr class="m-2">

                    <div class="group m-4 mt-2">
                        <div class="row ">

                            <div class="form-group col-md-6">
                                <h6 class="mt-2"><i class="bi bi-geo-alt" style="font-size: 1.5rem"></i> AULAS :</h6>
                                <label class="mt-4" for="aulas">Quantidade de Aulas</label>
                                <select class="form-select" aria-label="Default select example" id="aulas" name="aulas">
                                    <option value="0" disabled selected>Selecione...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>

                                </select>

                            </div>

                            <div class="form-group col-md-6">
                                <h6 class="mt-2"><i class="bi bi-file-earmark-person" style="font-size: 1.5rem"></i> PROFESSOR :</h6>
                                <label class="mt-4" for="professores">Professores</label>
                                <select class="form-select" aria-label="Default select example" id="professores" name="professores">
                                    <option value="0" disabled selected>Selecione...</option>
                                    <option value="Angelo">Ângelo</option>
                                    <option value="Eros">Eros</option>
                                    <option value="Gabriel">Gabriel</option>
                                    <option value="Izabel">Izabel</option>
                                    <option value="Jeneffer">Jeneffer</option>
                                    <option value="Mateus">Mateus</option>
                                    <option value="Renata">Renata</option>

                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="form-group col-md-12">

                        <div class="group m-4 mt-2">
                            <div class="row ">

                                <div class="form-group">

                                    <button type="button" class="btn btn-primary mt-3" onclick="addaluno()">Gerar</button>

                                </div>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <?php
    include('../includes/footer.php')
    ?>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- SWEET ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- INPUT MASK -->
    <script src="../assets/js/jquery.inputmask.min.js"></script>


    <script src="../../js/addcadastros.js"></script>
    <script src="../../js/horarios.js"></script>
</body>

</html>