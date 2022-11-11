<?php
include '../includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php
    include('../includes/navbar.php')
    ?>

    <div class="container">
    
        <h5 class="text-center">Cadastro Básico</h5>
        <div class="card text-bg-dark p-3">
        <h6 class="m-4">DADOS PESSOAIS:</h6>
        
            <div class="form-group m-4 mt-2">
                <form id="form-aluno">

                    <div class="form-group ">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" id="" placeholder="Nome Completo">
                    </div>


                    <div class="row mt-4">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome do Pai</label>
                            <input type="text" class="form-control" id="" placeholder="Nome do Pai">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nome da Mãe</label>
                            <input type="text" class="form-control" id="" placeholder="Nome da Mãe">
                        </div>
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <label for="inputPassword4">Nome Social</label>
                        <input type="text" class="form-control" id="" placeholder="Nome Social">
                    </div>

                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Pais Afetivos 1</label>
                            <input type="text" class="form-control" id="" placeholder="Nome do Pai">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Pais Afetivos 2</label>
                            <input type="text" class="form-control" id="" placeholder="Nome da Mãe">
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Data de Nascimento</label>
                            <input type="date" class="form-control" id="" >
                        </div>
                        <div class="form-group col-md-2">
                            <label for="Pagamento">Genero</label>
                            <select class="form-select" aria-label="Default select example">

                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col-md-4 mt-4">
                            <label for="Pagamento">Nacionalidade</label>
                            <select class="form-select" aria-label="Default select example">

                                <option value="1">Brasileiro</option>
                                <option value="2">Brasileiro Naturalizado</option>
                                <option value="1">Estrangeiro</option>
                                <option value="1">Brasileiro Nascido no Exterior</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4 mt-4">
                            <label for="Pagamento">Estado</label>
                            <select class="form-select" aria-label="Default select example">

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
            </div>
       <hr class="m-2">

       <h6 class="m-4">DOCUMENTOS:</h6>

            <div class="group m-4 mt-2">
                <div class="form-group col-md-5 mt-2">
                    <label for="inputPassword4">CPF</label>
                    <input type="number" class="form-control" id="" placeholder="CPF">
                </div>

                <div class="row ">

                    <div class="form-group col-md-4 mt-4">
                        <label for="inputPassword4">RG</label>
                        <input type="number" class="form-control" id="" placeholder="RG">
                    </div>

                    <div class="form-group col-md-4 mt-4">
                        <label for="inputPassword4">Orgão Emissor</label>
                        <input type="number" class="form-control" id="" placeholder="RG">
                    </div>

                    <div class="form-group col-md-4 mt-4">
                        <label for="Pagamento">UF</label>
                        <select class="form-select" aria-label="Default select example">

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
    <h6 class="m-4">ENDEREÇO:</h6>
            <div class="group m-4">
                <div class="row mt-2 ">
                    <div class="form-group col-md-6 mt-4">
                        <label for="inputAddress">CEP</label>
                        <input type="number" class="form-control" id="" placeholder="CEP">
                    </div>
                    <div class="form-group col-md-6 mt-4">
                        <label for="inputAddress">Logradouro</label>
                        <input type="text" class="form-control" id="" placeholder="Lagradouro">
                    </div>

                </div>


                <div class="row">
                    <div class="form-group col-md-6 mt-4 ">
                        <label for="inputCity">Numero</label>
                        <input type="number" class="form-control" id="" placeholder="Nº">
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <label for="inputCEP">Complemento</label>
                        <input type="text" class="form-control" id="" placeholder="Complemento">
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6 mt-4 ">
                        <label for="inputCity">Bairro</label>
                        <input type="text" class="form-control" id="" placeholder="Bairro">
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <label for="inputCEP">Municipio</label>
                        <input type="text" class="form-control" id="" placeholder="Municipio">
                    </div>
                </div>
            </div>
            <hr class="m-2">

       <h6 class="m-4">PAGAMENTO:</h6>
            <div class="group m-4">

                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="Pagamento">Pagamento</label>
                        <select class="form-select" aria-label="Default select example">

                            <option value="1">Dinheiro</option>
                            <option value="2">Cartão</option>
                            <option value="3">Boleto</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="Pagamento">Disponibilidade</label>
                        <select class="form-select" aria-label="Default select example">

                            <option value="1">Manhã (07:00h-11:00h)</option>
                            <option value="2">Tarde (12:00h-19:00h)</option>
                            <option value="3">Integral</option>
                        </select>
                    </div>

                </div>
            </div>
            <hr class="m-2">

        <h6 class="m-4">CONTATO:</h6>
            <div class="group m-4">
                <div class="row">
                    <div class="form-group col-md-6 mt-4">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@hotmail.com">
                    </div>
                    <div class="form-group col-md-6 mt-4">
                        <label for="email">Confirmar E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@hotmail.com">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mt-4">
                        <label for="email">DDD | Telefone (19) 99999-9999</label>
                        <input type="number" class="form-control" id="email" placeholder="Telefone" >
                    </div>

                    <div class="form-group col-md-6 mt-4">
                        <label for="email">DDD | Telefone 2 (19) 99999-9999</label>
                        <input type="number" class="form-control" id="email" placeholder="Telefone 2" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mt-4">
                        <label for="email">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="form-group col-md-6 mt-4">
                        <label for="email">Confirmar Senha</label>
                        <input type="password" class="form-control" id="senha2" placeholder="Confirme sua senha">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3" onclick="addaluno()">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>


    <a href="backend/logout.php">Sair</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script src="../../js/addcadastros.js"></script>
</body>

</html>