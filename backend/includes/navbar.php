<?php
include 'controle_session.php';
?>

<nav class="navbar navbar-expand-lg text-bg-light text-dark shadow-sm p-0 mb-5 bg-white" style="z-index:100">
  <div class="container-fluid position-relative">
    <a class="navbar-brand" href="../../../AutoPlanner/tela_prin.php">
      <img src="images/logo_tipo.png" alt="" width="140px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse position-absolute top-50 start-50 translate-middle mt-1 " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-6 fw-bold" aria-current="page" href="../../../AutoPlanner/tela_prin.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fs-6 fw-bold" href="#">Agenda</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-6 fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/cadastro_alunos.php">Aluno</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/cadastro_professor.php">Professor</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-6 fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/consultar_alunos.php">Aluno</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/consultar_professor.php">Professor</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item fs-6 fw-bold" href="../../../AutoPlanner/backend/front/consultar_aulas.php">Aulas</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active fs-6 fw-bold" aria-current="page" href="#">Contabilidade</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active fs-6 fw-bold" aria-current="page" href="../../../AutoPlanner/backend/front/gerar_aulas.php">Gerar Aulas</a>
        </li>

      </ul>

    </div>
    <form class="d-flex" role="buscar">
      <input class="input-group input-group-sm mb-3 form-control mt-3" type="search" placeholder="Buscar" aria-label="buscar">
      <a href="backend/"> <button class="btn btn-outline-dark mt-3 me-2" type="submit"><i class="bi bi-search"></i></button></a>
      
    </form>
  </div>
</nav>



