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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include('../includes/navbar.php')
    ?>

    <div class="container">
        <h5 class="text-center m-4" ><i class="bi bi-person-workspace" style="font-size: 1.5rem"></i> Cadastro Professores</h5>
        <div class="text-bg-secondary p-3 border border-5">
            <h6 class="m-4"><i class="bi bi-person-lines-fill" tyle="font-size: 2rem"></i> DADOS PROFESSOR :</h6>
            <div class="form-group">
                <form action="_valida_cadastro_aluno" method="post">

                    <div class="form-group mt-4">
                        <div class="row mt-4">
                            <label for="inputEmail4">Nome do Professor</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 mt-4">
                                <label for="Pagamento">Estado</label>
                                <select class="form-select" aria-label="Default select example" id="cidade" name="cidade">

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


                        <div class="form-group col-md-6 mt-4">
                            <label for="Pagamento">UF</label>
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








            <hr>

            <div class="row">
                <h6 class="m-4"><i class="bi bi-file-earmark-person" style="font-size: 1.5rem"></i> CONTATO :</h6>
                <div class="form-group col-md-6 mt-4">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                </div>
                <div class="form-group col-md-6 mt-4">
                    <label for="email">Confirmar E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Confirmar E-mail">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 mt-4">
                    <label for="telefone">DDD | Telefone (19) 99999-9999</label>
                    <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone ">
                </div>

                <div class="form-group col-md-6 mt-4">
                    <label for="telefone2">DDD | Telefone 2 (19) 99999-9999</label>
                    <input type="number" class="form-control" id="telefone2" name="telefone2" placeholder="Telefone 2">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 mt-4">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
                <div class="form-group col-md-6 mt-4">
                    <label for="senha">Confirmar Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Confirmar Senha">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </form>
        </div>
    </div>
    </div>


    <a href="backend/logout.php"><i class="bi bi-x-circle" style="font-size: 1rem"></i>Sair</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>