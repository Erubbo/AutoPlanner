<?php
include 'backend/includes/controle_session.php';
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
    include('backend/includes/navbar.php')
    ?>

    <div class="container">
        <h5 class="text-center">Casastro Básico</h5>

        <div class="form-group">
            <form action="_valida_cadastro_aluno" method="post">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" id="nomecad" placeholder="Nome">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Data Nascimento</label>
                        <input type="date" class="form-control" id="dataNascim" placeholder="">
                    </div>
                </div>

                <div class="row">


                    <div class="form-group col-md-6">
                        <label for="inputPassword4">RG</label>
                        <input type="number" class="form-control" id="rg" placeholder="RG">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">CPF</label>
                        <input type="number" class="form-control" id="cpf" placeholder="CPF">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress">Numero</label>
                        <input type="text" class="form-control" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 ">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEstado">Estado</label>
                        <input type="text" class="form-control" id="">

                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" id="inputCEP">
                    </div>
                </div>
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

                            <option value="1">Manhã (07:00-11:00)</option>
                            <option value="2">Tarde (12:00-19:00)</option>
                            <option value="3">Integral</option>
                        </select>
                    </div>
                </div>
                <hr>
                <h5 class="text-center">Cadastro APP</h5>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">Senha</label>
                        <input type="password" class="form-control" id="senha">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Confirmar Senha</label>
                        <input type="password" class="form-control" id="senha2">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </form>
        </div>
    </div>


    <a href="backend/logout.php">Sair</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>