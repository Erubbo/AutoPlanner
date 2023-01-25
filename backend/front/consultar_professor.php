<?php
include '../includes/conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



</head>

<body class="body-imagem">
    <?php
    include('../includes/navbar.php')
    ?>




    <!-- ////////////////////////// Datatable para listagem de dados ////////////////////////////// -->
    <div class="border rounded mt-4 p-2">

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Pesquisar" aria-label="Pesquisar"
          aria-describedby="btnNavbarSearch" />
        <button class="btn btn-light" id="btnNavbarSearch" type="submit" onclick="listar()">Pesquisar</button>
      </div>
    </form>

        <button class="btn btn-primary btn-sm" onclick="listarprofessor()"><i class="bi bi-arrow-clockwise"></i></button>

        <table class="table table-dark table-striped mt-4 dt-responsive " id="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data de Cadastro</th>
                    <th>Ativo</th>
                    <th>Alterar</th>
                </tr>
            </thead>
            <tbody id="listar-aluno">

            </tbody>
        </table>
    </div>

    <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

   
        <!-- data do modal dia 24/01/23-->
        <!-- Modal de Edição de Usuário -->
    <div class="modal fade" id="modal-editar-usuario" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar dados do usuário</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form id="form-usuarios-editar">
              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-nome">Nome</label>
                  <input class="form-control" type="text" name="edita-nome" id="edita-nome" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-email">E-mail</label>
                  <input class="form-control" type="email" name="edita-email" id="edita-email" />
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-telefone">Telefone</label>
                  <input class="form-control" type="text" name="edita-telefone" id="edita-telefone" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-cpf">CPF</label>
                  <input class="form-control" type="text" name="edita-cpf" id="edita-cpf" />
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-senha">Senha</label>
                  <input class="form-control" type="password" name="edita-senha" id="edita-senha" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-confirmar">Confirmar Senha</label>
                  <input class="form-control" type="password" name="edita-confirmar" id="edita-confirmar" />
                </div>
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick="updateProfessor()">Salvar</button>
          </div>
        </div>
      </div>
    </div>

    </div>






    <!-- importação do JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Importação do InputMask -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
    integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <!-- Importação do SweetAlert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="../assets/js/listar_professor.js"></script>
</body>

</html>