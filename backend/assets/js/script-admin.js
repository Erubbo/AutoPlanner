/// scripts executados ao carregar a pagina
$(document).ready(function () {
  $("#cpf").inputmask("999.999.999-99");
  $("#telefone").inputmask("(99) 99999-9999");
  $("#cep").inputmask("99999-999");

  // executa a funcao listaTipo()
  listaTipo();
});

const consultaCEP = () => {
  // captura o valor do cep via JQUERY
  let cep = $("#cep").val();

  //replace para tirar o _ e - da mascara
  cep = cep.replaceAll("_", "").replaceAll("-", "");

  //verifica se o CEP foi preenchido com todos os numeros
  if (cep.length < 8) {
    Swal.fire({
      icon: "error",
      title: "Atenção...",
      text: "CEP inválido!",
    });
    $("#cep").focus();
    return;
  }

  //   realiza requisicao para API VIA CEP
  const result = fetch(`http://viacep.com.br/ws/${cep}/json/`)
    .then((response) => response.json())
    .then((result) => {
      // retorno da requisicao

      if (result.erro) {
        Swal.fire({
          icon: "error",
          title: "Atenção...",
          text: "CEP não encontrado!",
        });
      } else {
        $("#rua").val(result.logradouro).prop("disabled", false);
        $("#bairro").val(result.bairro).prop("disabled", false);
        $("#cidade").val(result.localidade).prop("disabled", false);
        $("#estado").val(result.uf).prop("disabled", false);

        // coloca o focus do usuário no campo numero
        $("#numero").prop("disabled", false).focus();
      }
    });
};

const listaTipo = () => {
  // funcao que lista os tipos para o cadastro
  // dados da tabela tb_tipos
  const result = fetch("../backend/listaTipo.php")
    .then((response) => response.json())
    .then((result) => {
      // aqui sera o retorno dos dados do backend
      // monta no select os options com os tipos da tabela

      result.map((tipo) => {
        $("#tipo").append(
          `
          <option value="${tipo.id}">${tipo.tipo}</option>
        `
        );
      });
    });
};

// const addUsuarios = () => {
//   let dados = new FormData($("#form-professores")[0]);

//   const result = fetch("../backend/addUsuarios.php", {
//     method: "POST",
//     body: dados,
//   })
//     .then((response) => response.json())
//     .then((result) => {
//       // aqui tratamos o retorno do backend

//       Swal.fire({
//         icon: result.retorno == 'ok' ? 'success' : 'error',
//         title: result.retorno == 'ok' ? 'Sucesso!' : 'Atenção!',
//         text: result.mensagem,
//       });

//       result.retorno == 'ok' ? $('#form-professores')[0].reset() : ''


      
//     });
// };



// Funcao que exibe a aba cadastro e oculta a aba listagem
const abaCadastro=()=>{
  // oculta a div de listagem
  $('#div-listagem').hide()

  // mostra a div de cadastro
  $('#form-professores').show()

  $('#aba-listagem').removeClass('tab-ativo')

  $('#aba-cadastro').addClass('tab-ativo')
}

// funcao que exibe a aba listagem e oculta a aba cadastro
const abaListagem=()=>{
  // esconde o form professores
  $('#form-professores').hide()

  // exibe a div de listagem
  $('#div-listagem').show()

  $('#aba-cadastro').removeClass('tab-ativo')
  // add a classe 
  $('#aba-listagem').addClass('tab-ativo')
}

const pesquisarUsuario = () =>{

  // validacao de campo pesquisar vazio
  let pesquisar = $('#pesquisar').val()

  if(pesquisar == ''){
    Swal.fire({
      icon: 'error',
      title: 'Atenção!',
      text: 'Digite um nome ou CPF para pesquisar!',
    });
    return
  }

  dados = new FormData($('#form-listagem')[0])

  result = fetch('../backend/pesquisarUsuario.php',{
    method: 'POST',
    body: dados
  })
  .then((response)=>response.json())
  .then((result)=>{
    // aqui iremos exibir os dados encontrados na pesquisa na tela
    $('#resultado-listagem').html(`
          <div id="tabela-listagem">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="dados-tabela-listagem">
                                                
                </tbody>
            </table>
        </div>    
    `)
 
    if(result.length == 0){
      $('#dados-tabela-listagem').append(`
        <tr>
          <td colspan="5">Nenhum usuário foi encontrado!</td>
        </tr>
      `)
    }else{
      result.map((usuario)=>{
        $('#dados-tabela-listagem').append(`
          <tr>
            <td>${usuario.nome}</td>
            <td>${usuario.email}</td>
            <td>${usuario.telefone}</td>
            <td>${usuario.cpf}</td>
            <td>
                <button class="btn-visualizar">Visualizar</button>
            </td>
          </tr>    
      `)

      })//fecha o map
      
    }//fecha o else
  })//fecha o result

}//fecha a funcao
