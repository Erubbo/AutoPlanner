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
    <!-- Importação CSS - Datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="../../css/estilo-altura-fundo.css">



</head>

<body class="body-imagem">
    <?php
    include('../includes/navbar.php')
    ?>

    <h5 class="text-center text-light"><i class="bi bi-person-circle" style="font-size: 1.5rem"></i> Consultar Aulas</h5>

    <!-- ////////////////////////// Datatable para listagem de dados ////////////////////////////// -->
    <div class="border rounded mt-4 p-2 bg-secondary">

        <!-- Navbar Search
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="" aria-label="Pesquisar" aria-describedby="btnNavbarSearch" />
                <button class="btn btn-light" id="btnNavbarSearch" type="submit">Nome do Aluno</button>
            </div>
        </form>

        <button class="btn btn-primary btn-sm" onclick="listar()"><i class="bi bi-arrow-clockwise"></i></button> -->

        <table class="table table-secondary table-striped mt-4 dt-responsive " id="tabela">
            <thead>
                <tr>
                    
                    <th>Nome</th>
                    <th>Quantidade de aulas registradas</th>
                    <th>Tipo CNH</th>
                    <th>Aulas Faltantes</th>
                </tr>
            </thead>
            <tbody id="listar-aulas">

            </tbody>
        </table>
    </div>

    <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

    <!-- Modal de edição de usuario -->
    <!-- <div class="modal fade" id="modal-editar-usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar dados do usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Dados do usuário</h3> -->
                    <!-- ////////////////////////////////////////////////////////////////////////////// -->
                    <!-- <form id="form-produto-editar">
                        <div class="row">

                            <div class="col">
                                <label class="form-label" for="edita-nome">Nome</label>
                                <input class="form-control" type="number" name="edita-nome" id="edita-nome">
                            </div>

                            <div class="col">
                                <input class="form-control" type="text" name="id-edit" id="id-edit" readonly hidden>
                            </div>

                            <div class="col">
                                <input class="form-control" type="text" name="oper" id="oper" readonly hidden>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" onclick="updateUser()">Salvar
                        Alterações</button>
                </div>
            </div>
        </div>
    </div> -->

    <?php
    include('../includes/footer.php')
    ?>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Importação JS - Datatable -->
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- Importação do SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

    <script src="../assets/js/listar_aulas.js"></script>
</body>

</html>