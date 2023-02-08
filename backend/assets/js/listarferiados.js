// inicia a datatable
$(document).ready(function () {
  // executa a função delistar alunos
  listarferiados();
  $("");
});

// função que lista os alunos cadastrados
const listarferiados = () => {
  const result = fetch("../listarferiados.php", {
    method: "POST",
    body: "",
    //     headers: {
    //   'Content-type': 'application/x-www-form-urlencoded'
    // }
  })
    .then((response) => response.json())
    .then((result) => {
      // aqui é tratado o retorno ao front

      // let datahora = moment().format('DD/MM/YY HH:mm')

      // $('#horario-atualizado').html(datahora)

      // destroi a tabela que foi iniciada
      // $("#tabela").dataTable().fnDestroy()

      // limpa os dados da tabela
      $("#listarferiados").html("");

      // função que irá montar as linhas da tabela, o map é um tipo de laço
      result.map((prod) => {
        $("#listarferiados").append(`
        <tr>
                    
        <td>${prod.nome}</td>
        <td>${prod.data}</td>
        <td>${prod.data_fim}</td>
                 
            `);
      });

      //  css dinamico para botão

      $("#tabela").DataTable({
        language: {
          url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json",
        },
      });
    });
};


