$(document).ready(function () {
  
    $("#cpf").inputmask("999.999.999-99");
    $("#rg").inputmask("99.999.999-9");
    $("#telefone").inputmask("(99) 99999-9999");
    $("#telefone2").inputmask("(99) 99999-9999");
    $("#cep").inputmask("99999-999");
  
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

// cadastra 

const addaluno = () => {
    let dados = new FormData($('#form-aluno')[0]);

    const result = fetch('../addaluno.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {
            // Aqui é tratado o retorno ao front

            Swal.fire({
                title: 'Atenção',
                text: result.mensagem,
                icon: result.retorno == 'ok' ? 'success' : 'error'
            })
            result.retorno == 'ok' ? $('#form-aluno')[0].reset() : ''
        })
};

const addprof = () => {
  let dados = new FormData($('#form-prof')[0]);

  const result = fetch('../addprof.php', {
      method: 'POST',
      body: dados
  })
      .then((response) => response.json())
      .then((result) => {
          // Aqui é tratado o retorno ao front

          Swal.fire({
              title: 'Atenção',
              text: result.mensagem,
              icon: result.retorno == 'ok' ? 'success' : 'error'
          })
          // result.retorno == 'ok' ? $('#form-prof')[0].reset() : ''
      })
};
