<?php
include '../includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/horarios.css">
    <link rel="stylesheet" href="../../css/estilo-aluno-professor.css">


</head>

<body class="body-imagem">
    <?php
    include('../includes/navbar.php')
    ?>

    <div class="container">

        <h5 class="text-center m-4"><i class="bi bi-person-circle" style="font-size: 1.5rem"></i> Cadastro Alunos</h5>

        <div class="text-bg-secondary p-3 border border-5 rounded-3">

            <div class="form-group m-4 mt-2">
                <form id="form-aluno">
                    <h6 class="m-4"><i class="bi bi-file-richtext" style="font-size: 1.5rem"></i>DADOS PESSOAIS :</h6>
                    <div class="group m-4">

                        <div class="row ">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome Completo *</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nome_social">Nome Social</label>
                                <input type="text" class="form-control" id="nome_social" name="nome_social" placeholder="Nome Social">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="form-group col-md-6">
                                <label for="pai">Nome do Pai</label>
                                <input type="text" class="form-control" id="pai" name="pai" placeholder="Nome do Pai">
                            </div>

                            <div class="form-group col-md-6 ">
                                <label for="mae">Nome da Mãe</label>
                                <input type="text" class="form-control" id="mae" name="mae" placeholder="Nome da Mãe">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="form-group col-md-6">
                                <label for="pai_af">Pais Afetivos 1</label>
                                <input type="text" class="form-control" id="pai_af" name="pai_af" placeholder="Nome do Pai">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="mae_af">Pais Afetivos 2</label>
                                <input type="text" class="form-control" id="mae_af" name="mae_af" placeholder="Nome da Mãe">
                            </div>
                        </div>


                        <div class="row mt-2">
                            <div class="form-group col-md-6">
                                <label for="data_nascimento">Data de Nascimento *</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="genero">Genero</label>
                                <select class="form-select" aria-label="Default select example" id="genero" name="genero">
                                    <option value="0" disabled selected>Selecione...</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="nacionalidade">Nacionalidade *</label>
                                <select class="form-select" aria-label="Default select example" id="nacionalidade" name="nacionalidade">
                                    <option value="0" disabled selected>Selecione...</option>
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
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                            </div>



                            <div class="form-group col-md-6">
                                <label for="rg">RG *</label>
                                <input type="text" class="form-control" id="rg" name="rg" placeholder="RG">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="orgao_emissor">Orgão Emissor *</label>
                                <input type="text" class="form-control" id="orgao_emissor" name="orgao_emissor" placeholder="RG">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="uf">UF *</label>
                                <select class="form-select" aria-label="Default select example" id="uf" name="uf">
                                    <option value="0" disabled selected>Selecione...</option>
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

                                    <input id="cep" name="cep" type="text" class="form-control" placeholder="CEP">
                                    <button class="input-group-text" type="button" id="basic-addon1" onclick="consultaCep()"><i class="bi bi-search "></i></button>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="numero">Numero *</label>
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="municipio">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="estado">Estado</label>
                            <select class="form-select" aria-label="Default select example" id="estado" name="estado">
                                <option value="0" disabled selected>Selecione...</option>
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

                    <h6 class="m-4"><i class="bi bi-cash-stack" style="font-size: 1.5rem"></i> PAGAMENTO :</h6>
                    <div class="group m-4">

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
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                    </div>



                    <div class="form-group col-md-6">
                        <label for="rg">RG *</label>
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="orgao_emissor">Orgão Emissor *</label>
                        <input type="text" class="form-control" id="orgao_emissor" name="orgao_emissor" placeholder="RG">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="uf">UF *</label>
                        <select class="form-select" aria-label="Default select example" id="uf" name="uf">

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

                            <input id="cep" name="cep" type="text" class="form-control" placeholder="CEP">
                            <button class="input-group-text" type="button" id="basic-addon1" onclick="consultaCep()"><i class="bi bi-search "></i></button>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="logradouro">Logradouro</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
                    </div>

                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="numero">Numero *</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                    </div>
                </div>



                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="estado">Estado</label>
                    <select class="form-select" aria-label="Default select example" id="estado" name="estado">

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

            <h6 class="m-4"><i class="bi bi-cash-stack" style="font-size: 1.5rem"></i> PAGAMENTO :</h6>
            <div class="group m-4">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="pagamento">Pagamento</label>
                        <select class="form-select" aria-label="Default select example" id="pagamento" name="pagamento">

                            <option value="1">Dinheiro</option>
                            <option value="2">Cartão</option>
                            <option value="3">Boleto</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6 horarios-escolha">
                        <label for="disponibilidade">Disponibilidade</label>
                        <br>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Segunda-feira
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <input type="checkbox" id="segunda08" name="segunda[]" value="08:00">
                                        <label for="08"> 08:00 às 09:00</label><br>
                                        <input type="checkbox" id="segunda09" name="segunda[]" value="09:00">
                                        <label for="09"> 09:00 às 10:00</label><br>
                                        <input type="checkbox" id="segunda10" name="segunda[]" value="10:00">
                                        <label for="10"> 10:00 às 11:00</label><br>
                                        <input type="checkbox" id="segunda11" name="segunda[]" value="11:00">
                                        <label for="11"> 11:00 às 12:00</label><br>
                                        <input type="checkbox" id="segunda12" name="segunda[]" value="12:00">
                                        <label for="12"> 12:00 às 13:00</label><br>
                                        <input type="checkbox" id="segunda13" name="segunda[]" value="13:00">
                                        <label for="13"> 13:00 às 14:00</label><br>
                                        <input type="checkbox" id="segunda14" name="segunda[]" value="14:00">
                                        <label for="14"> 14:00 às 15:00</label><br>
                                        <input type="checkbox" id="segunda15" name="segunda[]" value="15:00">
                                        <label for="15"> 15:00 às 16:00</label><br>
                                        <input type="checkbox" id="segunda16" name="segunda[]" value="16:00">
                                        <label for="16"> 16:00 às 17:00</label><br>
                                        <input type="checkbox" id="segunda17" name="segunda[]" value="17:00">
                                        <label for="17"> 17:00 às 18:00</label><br>
                                        <input type="checkbox" id="segunda18" name="segunda[]" value="18:00">
                                        <label for="18"> 18:00 às 19:00</label><br>
                                        <input type="checkbox" id="segunda19" name="segunda[]" value="19:00">
                                        <label for="19"> 19:00 às 20:00</label><br>
                                        <input type="checkbox" id="segunda20" name="segunda[]" value="20:00">
                                        <label for="20"> 20:00 às 21:00</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Terça-feira
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <input type="checkbox" id="terca08" name="terca[]" value="08:00">
                                        <label for="08"> 08:00 às 09:00</label><br>
                                        <input type="checkbox" id="terca09" name="terca[]" value="09:00">
                                        <label for="09"> 09:00 às 10:00</label><br>
                                        <input type="checkbox" id="terca10" name="terca[]" value="10:00">
                                        <label for="10"> 10:00 às 11:00</label><br>
                                        <input type="checkbox" id="terca11" name="terca[]" value="11:00">
                                        <label for="11"> 11:00 às 12:00</label><br>
                                        <input type="checkbox" id="terca12" name="terca[]" value="12:00">
                                        <label for="12"> 12:00 às 13:00</label><br>
                                        <input type="checkbox" id="terca13" name="terca[]" value="13:00">
                                        <label for="13"> 13:00 às 14:00</label><br>
                                        <input type="checkbox" id="terca14" name="terca[]" value="14:00">
                                        <label for="14"> 14:00 às 15:00</label><br>
                                        <input type="checkbox" id="terca15" name="terca[]" value="15:00">
                                        <label for="15"> 15:00 às 16:00</label><br>
                                        <input type="checkbox" id="terca16" name="terca[]" value="16:00">
                                        <label for="16"> 16:00 às 17:00</label><br>
                                        <input type="checkbox" id="terca17" name="terca[]" value="17:00">
                                        <label for="17"> 17:00 às 18:00</label><br>
                                        <input type="checkbox" id="terca18" name="terca[]" value="18:00">
                                        <label for="18"> 18:00 às 19:00</label><br>
                                        <input type="checkbox" id="terca19" name="terca[]" value="19:00">
                                        <label for="19"> 19:00 às 20:00</label><br>
                                        <input type="checkbox" id="terca20" name="terca[]" value="20:00">
                                        <label for="20"> 20:00 às 21:00</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Quarta-feira
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <input type="checkbox" id="quarta08" name="quarta[]" value="08:00">
                                        <label for="08"> 08:00 às 09:00</label><br>
                                        <input type="checkbox" id="quarta09" name="quarta[]" value="09:00">
                                        <label for="09"> 09:00 às 10:00</label><br>
                                        <input type="checkbox" id="quarta10" name="quarta[]" value="10:00">
                                        <label for="10"> 10:00 às 11:00</label><br>
                                        <input type="checkbox" id="quarta11" name="quarta[]" value="11:00">
                                        <label for="11"> 11:00 às 12:00</label><br>
                                        <input type="checkbox" id="quarta12" name="quarta[]" value="12:00">
                                        <label for="12"> 12:00 às 13:00</label><br>
                                        <input type="checkbox" id="quarta13" name="quarta[]" value="13:00">
                                        <label for="13"> 13:00 às 14:00</label><br>
                                        <input type="checkbox" id="quarta14" name="quarta[]" value="14:00">
                                        <label for="14"> 14:00 às 15:00</label><br>
                                        <input type="checkbox" id="quarta15" name="quarta[]" value="15:00">
                                        <label for="15"> 15:00 às 16:00</label><br>
                                        <input type="checkbox" id="quarta16" name="quarta[]" value="16:00">
                                        <label for="16"> 16:00 às 17:00</label><br>
                                        <input type="checkbox" id="quarta17" name="quarta[]" value="17:00">
                                        <label for="17"> 17:00 às 18:00</label><br>
                                        <input type="checkbox" id="quarta18" name="quarta[]" value="18:00">
                                        <label for="18"> 18:00 às 19:00</label><br>
                                        <input type="checkbox" id="quarta19" name="quarta[]" value="19:00">
                                        <label for="19"> 19:00 às 20:00</label><br>
                                        <input type="checkbox" id="quarta20" name="quarta[]" value="20:00">
                                        <label for="20"> 20:00 às 21:00</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Quinta-feira
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <input type="checkbox" id="quinta08" name="quinta[]" value="08:00">
                                        <label for="08"> 08:00 às 09:00</label><br>
                                        <input type="checkbox" id="quinta09" name="quinta[]" value="09:00">
                                        <label for="09"> 09:00 às 10:00</label><br>
                                        <input type="checkbox" id="quinta10" name="quinta[]" value="10:00">
                                        <label for="10"> 10:00 às 11:00</label><br>
                                        <input type="checkbox" id="quinta11" name="quinta[]" value="11:00">
                                        <label for="11"> 11:00 às 12:00</label><br>
                                        <input type="checkbox" id="quinta12" name="quinta[]" value="12:00">
                                        <label for="12"> 12:00 às 13:00</label><br>
                                        <input type="checkbox" id="quinta13" name="quinta[]" value="13:00">
                                        <label for="13"> 13:00 às 14:00</label><br>
                                        <input type="checkbox" id="quinta14" name="quinta[]" value="14:00">
                                        <label for="14"> 14:00 às 15:00</label><br>
                                        <input type="checkbox" id="quinta15" name="quinta[]" value="15:00">
                                        <label for="15"> 15:00 às 16:00</label><br>
                                        <input type="checkbox" id="quinta16" name="quinta[]" value="16:00">
                                        <label for="16"> 16:00 às 17:00</label><br>
                                        <input type="checkbox" id="quinta17" name="quinta[]" value="17:00">
                                        <label for="17"> 17:00 às 18:00</label><br>
                                        <input type="checkbox" id="quinta18" name="quinta[]" value="18:00">
                                        <label for="18"> 18:00 às 19:00</label><br>
                                        <input type="checkbox" id="quinta19" name="quinta[]" value="19:00">
                                        <label for="19"> 19:00 às 20:00</label><br>
                                        <input type="checkbox" id="quinta20" name="quinta[]" value="20:00">
                                        <label for="20"> 20:00 às 21:00</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Sexta-feira
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <input type="checkbox" id="sexta08" name="sexta[]" value="08:00">
                                        <label for="08"> 08:00 às 09:00</label><br>
                                        <input type="checkbox" id="sexta09" name="sexta[]" value="09:00">
                                        <label for="09"> 09:00 às 10:00</label><br>
                                        <input type="checkbox" id="sexta10" name="sexta[]" value="10:00">
                                        <label for="10"> 10:00 às 11:00</label><br>
                                        <input type="checkbox" id="sexta11" name="sexta[]" value="11:00">
                                        <label for="11"> 11:00 às 12:00</label><br>
                                        <input type="checkbox" id="sexta12" name="sexta[]" value="12:00">
                                        <label for="12"> 12:00 às 13:00</label><br>
                                        <input type="checkbox" id="sexta13" name="sexta[]" value="13:00">
                                        <label for="13"> 13:00 às 14:00</label><br>
                                        <input type="checkbox" id="sexta14" name="sexta[]" value="14:00">
                                        <label for="14"> 14:00 às 15:00</label><br>
                                        <input type="checkbox" id="sexta15" name="sexta[]" value="15:00">
                                        <label for="15"> 15:00 às 16:00</label><br>
                                        <input type="checkbox" id="sexta16" name="sexta[]" value="16:00">
                                        <label for="16"> 16:00 às 17:00</label><br>
                                        <input type="checkbox" id="sexta17" name="sexta[]" value="17:00">
                                        <label for="17"> 17:00 às 18:00</label><br>
                                        <input type="checkbox" id="sexta18" name="sexta[]" value="18:00">
                                        <label for="18"> 18:00 às 19:00</label><br>
                                        <input type="checkbox" id="sexta19" name="sexta[]" value="19:00">
                                        <label for="19"> 19:00 às 20:00</label><br>
                                        <input type="checkbox" id="sexta20" name="sexta[]" value="20:00">
                                        <label for="20"> 20:00 às 21:00</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Sábado
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <input type="checkbox" id="sabado08" name="sabado[]" value="08:00">
                                        <label for="08"> 08:00 às 09:00</label><br>
                                        <input type="checkbox" id="sabado09" name="sabado[]" value="09:00">
                                        <label for="09"> 09:00 às 10:00</label><br>
                                        <input type="checkbox" id="sabado10" name="sabado[]" value="10:00">
                                        <label for="10"> 10:00 às 11:00</label><br>
                                        <input type="checkbox" id="sabado11" name="sabado[]" value="11:00">
                                        <label for="11"> 11:00 às 12:00</label><br>
                                        <input type="checkbox" id="sabado12" name="sabado[]" value="12:00">
                                        <label for="12"> 12:00 às 13:00</label><br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-2">




                    <h6 class="m-4"><i class="bi bi-file-earmark-person" style="font-size: 1.5rem"></i> CONTATO :</h6>

                    <div class="group m-4">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="email">E-mail *</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@hotmail.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirma_email">Confirmar E-mail</label>
                                <input type="email" class="form-control" id="confirma_email" name="confirma_email" placeholder="exemplo@hotmail.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="telefone">DDD | Telefone *</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="telefone2">DDD | Telefone 2 </label>
                                <input type="text" class="form-control" id="telefone2" name="telefone2" placeholder="Telefone 2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="senha">Senha </label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirmar">Confirmar Senha </label>
                                <input type="password" class="form-control" id="confirmar" name="confirmar" placeholder="Confirme sua senha">
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary mt-3" onclick="addaluno()">Cadastrar</button>

                        <a href="backend/logout.php"><button type="submit" class="btn btn-danger mt-3" onclick="addaluno()">Sair</button></a>
                    </div>
                </form>
            </div>
        </div>
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