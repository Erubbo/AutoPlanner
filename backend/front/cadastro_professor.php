<?php
include '../includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Professores</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/estilo-altura-fundo.css">

</head>

<body class="body-imagem">
    <?php
    include('../includes/navbar.php')
    ?>

    <div class="container altura-minima">

        <div class="form-group">
            <form id="form-prof">

                <h5 class="text-center m-4 text-light"><i class="bi bi-person-workspace" style="font-size: 1.5rem"></i> Cadastro Professores</h5>
                <div class="text-bg-secondary p-3 border border-3 rounded-3">


                    <div class="form-group m-4 mt-2 text-light">
                        <form id="form-aluno">
                            <h6 class="m-4"><i class="bi bi-file-richtext" style="font-size: 1.5rem"></i>DADOS PROFESSORES :</h6>

                            <div class="group m-4">
                                <div class="row mt-2">
                                    <div class="form-group col-md-6">
                                        <label for="nome">Nome Completo *</label>
                                        <input type="text" class="form-control" id="nome" name="nome">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="data_nascimento">Data de Nascimento *</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="form-group col-md-6">
                                        <label for="genero">Genero</label>
                                        <select class="form-select" aria-label="Default select example" id="genero" name="genero">
                                            <option value="0" disabled selected>Selecione...</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nacionalidade">Nacionalidade *</label>
                                        <select class="form-select" aria-label="Default select example" id="nacionalidade" name="nacionalidade">

                                            <option value="0" selected disabled>Selecione...</option>
                                            <option value="1">Brasileiro</option>
                                            <option value="2">Brasileiro Naturalizado</option>
                                            <option value="1">Estrangeiro</option>
                                            <option value="1">Brasileiro Nascido no Exterior</option>
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <hr class="m-2">

                            <h6 class="m-4"><i class="bi bi-card-heading" style="font-size: 1.5rem"></i> DOCUMENTOS :</h6>

                            <div class="group m-4 mt-2">
                                <div class="row ">
                                    <div class="form-group col-md-6">
                                        <label for="cpf">CPF *</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf">
                                    </div>



                                    <div class="form-group col-md-6">
                                        <label for="rg">RG *</label>
                                        <input type="text" class="form-control" id="rg" name="rg">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="orgao_emissor">Orgão Emissor *</label>
                                        <input type="text" class="form-control" id="orgao_emissor" name="orgao_emissor">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="uf">UF *</label>
                                        <select class="form-select" aria-label="Default select example" id="uf" name="uf">

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

                                </div>
                            </div>
                            <hr class="m-2">
                            <h6 class="m-4"><i class="bi bi-geo-alt" style="font-size: 1.5rem"></i> ENDEREÇO :</h6>
                            <div class="group m-4">
                                <div class="row mt-2 ">

                                    <div class="form-group col-md-6">

                                        <label for="cep">CEP *</label>
                                        <div class="input-group mb-3">

                                            <input id="cep" name="cep" type="text" class="form-control">
                                            <button class="input-group-text" type="button" id="basic-addon1" onclick="consultaCep()"><i class="bi bi-search "></i></button>
                                        </div>

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="logradouro">Logradouro</label>
                                        <input type="text" class="form-control" id="logradouro" name="logradouro">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="numero">Numero *</label>
                                        <input type="text" class="form-control" id="numero" name="numero">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="complemento">Complemento</label>
                                        <input type="text" class="form-control" id="complemento" name="complemento">
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="municipio">Municipio</label>
                                        <input type="text" class="form-control" id="municipio" name="municipio">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="estado">Estado</label>
                                    <select class="form-select" aria-label="Default select example" id="estado" name="estado">

                                        <option value="0">Selecione...</option>
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
                            </div>

                            <hr class="m-2">

                            <h6 class="m-4"><i class="bi bi-file-earmark-person" style="font-size: 1.5rem"></i> CONTATO :</h6>
                            <div class="group m-4">
                                <div class="row">
                                    <div class="form-group col-md-6 mt-2">
                                        <label for="email">E-mail *</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group col-md-6 mt-2">
                                        <label for="confirma_email">Confirmar E-mail</label>
                                        <input type="email" class="form-control" id="confirma_email" name="confirma_email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 mt-2">
                                        <label for="telefone">DDD | Telefone * </label>
                                        <input type="text" class="form-control" id="telefone" name="telefone">
                                    </div>

                                    <div class="form-group col-md-6 mt-2 ">
                                        <label for="telefone2">DDD | Telefone 2 </label>
                                        <input type="text" class="form-control" id="telefone2" name="telefone2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 mt-2">
                                        <label for="senha">Senha</label>
                                        <input type="password" class="form-control" id="senha" name="senha">
                                    </div>
                                    <div class="form-group col-md-6 mt-2">
                                        <label for="confirmar">Confirmar Senha</label>
                                        <input type="password" class="form-control" id="confirmar" name="confirmar">
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary mt-3" onclick="addprof()">Cadastrar</button>
                                <a href="../../tela_prin.php"><button type="button" class="btn btn-danger mt-3">Sair</button></a>

                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <?php
    include('../includes/footer.php')
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- SWEET ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- INPUT MASK -->
    <script src="../assets/js/jquery.inputmask.min.js"></script>

    <script src="../../js/addcadastros.js"></script>
</body>

</html>