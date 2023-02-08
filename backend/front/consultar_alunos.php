<?php
include '../includes/conexao.php';



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta aluno</title>
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

  <div class="container altura-minima">

    <h5 class="text-center text-light"><i class="bi bi-mortarboard" style="font-size: 1.5rem"></i> Consultar Alunos</h5>

    <!-- ////////////////////////// Datatable para listagem de dados ////////////////////////////// -->
    <div class="border rounded mt-4 p-2 bg-secondary table-responsive">

      <!-- retirado pesquisa pois já tem no datatable - renata - 27-01 -->
      <!-- Navbar Search-->
      <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"> -->
      <!-- <div class="input-group">
        <input class="form-control" type="text" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="btnNavbarSearch" />
        <button class="btn btn-light" id="btnNavbarSearch" type="submit">Pesquisar</button>
      </div>
    </form>

    <button class="btn btn-primary btn-sm" onclick="listaraluno()"><i class="bi bi-arrow-clockwise"></i></button> -->

      <table class="table table-secondary table-striped mt-4 dt-responsive " id="tabela">
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

    <!-- Modal dia 25/01/2023 -->
    <!-- Modal de Edição de Usuário -->
    <div class="modal fade" id="modal-editar-usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar dados do usuário</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>


          <div class="modal-body">
            <form id="form-aluno-editar">
              <div class="row">
                <input class="form-control" type="text" name="edita_id_aluno" id="edita_id_aluno" />
                <input class="form-control" type="text" name="edita_id_endereco" id="edita_id_endereco" />
                <div class="col-md">
                  <label class="form-label" for="edita-nome">Nome</label>
                  <input class="form-control" type="text" name="edita-nome" id="edita-nome" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-nome_social">Nome Social</label>
                  <input class="form-control" type="email" name="edita-nome_social" id="edita-nome_social" />
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-pai">Nome do Pai</label>
                  <input class="form-control" type="text" name="edita-pai" id="edita-pai" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-mae">Nome da Mãe</label>
                  <input class="form-control" type="email" name="edita-mae" id="edita-mae" />
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-pai_af">Pais Afetivos 1</label>
                  <input class="form-control" type="text" name="edita-pai_af" id="edita-pai_af" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-nmae_af">Pais Afetivos 2</label>
                  <input class="form-control" type="email" name="edita-mae_af" id="edita-mae_af" />
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-data_nascimento">Data de Nascimento</label>
                  <input class="form-control" type="date" name="edita-data_nascimento" id="edita-data_nascimento" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-genero">Genero</label>
                  <select class="form-select" aria-label="Default select example" id="edita-genero" name="edita-genero">
                    <option value="0" disabled selected>Selecione...</option>
                    <option value="1">Homem Cisgênero</option>
                    <option value="2">Mulher Cisgênero</option>
                    <option value="2">Homem Transgênero</option>
                    <option value="2">Mulher Transgênero</option>
                    <option value="2">Outro</option>
                    <option value="2">Prefiro Não Responder</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-cpf">CPF</label>
                  <input class="form-control" type="text" name="edita-cpf" id="edita-cpf" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-rg">RG</label>
                  <input class="form-control" type="text" name="edita-rg" id="edita-rg" />
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-orgao_emissor">Orgão Emissor</label>
                  <input class="form-control" type="text" name="edita-orgao_emissor" id="edita-orgao_emissor" />
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-uf">UF</label>
                  <select class="form-select" aria-label="Default select example" id="edita-uf" name="edita-uf">

                    <option value="0" selected disabled>Selecione...</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col-md">
                    <label class="form-label" for="edita-telefone">Telefone </label>
                    <input class="form-control" type="text" name="edita-telefone" id="edita-telefone" />
                  </div>
                  <div class="col-md">
                    <label class="form-label" for="edita-telefone2">Telefone 2</label>
                    <input class="form-control" type="text" name="edita-telefone2" id="edita-telefone2" />
                  </div>
                </div>

                <div class="row">
                  <div class="col-md">
                    <label class="form-label" for="edita-cep">CEP</label>
                    <input class="form-control" type="text" name="edita-cep" id="edita-cep" />
                    <button class="input-group-text" type="button" id="basic-addon1" onclick="consultaCep()"><i class="bi bi-search "></i></button>
                  </div>
                  <div class="col-md">
                    <label class="form-label" for="edita-logradouro">Logradouro</label>
                    <input class="form-control" type="text" name="edita-logradouro" id="edita-logradouro" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    <label class="form-label" for="edita-numero">Numero</label>
                    <input class="form-control" type="text" name="edita-numero" id="edita-numero" />
                  </div>
                  <div class="col-md">
                    <label class="form-label" for="edita-complemento">Complemento</label>
                    <input class="form-control" type="text" name="edita-complemento" id="edita-complemento" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    <label class="form-label" for="edita-bairro">Bairro</label>
                    <input class="form-control" type="text" name="edita-bairro" id="edita-bairro" />
                  </div>
                  <div class="col-md">
                    <label class="form-label" for="edita-municipio">Municipio</label>
                    <input class="form-control" type="text" name="edita-municipio" id="edita-municipio" />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <label class="form-label" for="edita-estado">Estado</label>
                  <select class="form-select" aria-label="Default select example" id="edita-estado" name="edita-estado">

                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                  </select>
                </div>
                <div class="col-md">
                  <label class="form-label" for="edita-email">E-mail</label>
                  <input class="form-control" type="email" name="edita-email" id="edita-email" />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick="updateAluno()">Salvar</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php
  include('../includes/footer.php')
  ?>

  <!-- importação do JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <!-- Importação JS - Datatable -->
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

  <!-- Importação do InputMask -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js" integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <!-- Importação do SweetAlert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



  <script src="../assets/js/listar_aluno.js"></script>


  <script src="../assets/js/alterar_aluno.js"></script>
</body>

</html>