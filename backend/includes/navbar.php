<?php
include 'controle_session.php';
?>

<nav class="navbar navbar-expand-lg text-bg-light text-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="images/logo_tipo.png" alt="" width="180px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-6" aria-current="page" href="../../../AutoPlanner/tela_prin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="#">Agenda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastros
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fs-6" href="../../../AutoPlanner/backend/front/cadastro_alunos.php">Aluno</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item fs-6" href="../../../AutoPlanner/backend/front/cadastro_professor.php">Professor</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-6" aria-current="page" href="#">Contabilidade</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../../consulta.php">Consulta</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>