// inicia a datatable 
$(document).ready(function () {

    // executa a função delistar alunos 
    listaraulas();
    $("")
});



// função que lista os aulas cadastradas
const listaraulas = () => {

    const result = fetch('../listaraulas.php', {
        method: 'POST',
        body: '',
        //     headers: {
        //   'Content-type': 'application/x-www-form-urlencoded'
        // }
    })
        .then((response => response.json()))
        .then((result) => {
            // aqui é tratado o retorno ao front

            // let datahora = moment().format('DD/MM/YY HH:mm')

            // $('#horario-atualizado').html(datahora)

            // destroi a tabela que foi iniciada
            // $("#tabela").dataTable().fnDestroy()

            // limpa os dados da tabela
            $('#listar-aulas').html('')

            // função que irá montar as linhas da tabela, o map é um tipo de laço
            result.map(prod => {
                $('#listar-aulas').append(`
                <tr>
                    
                    <td>${prod.nome}</td>
                    <td>${prod.total}</td>
                    <td>${prod.tipo}</td>
                    <td>${prod.faltando}</td>


                    
                    
                  
            `)
            })

            //  css dinamico para botão 

            $('#tabela').DataTable({
                "language": {

                    url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
                }
            });
        });

}

// const updateAlunoAtivo = (id) => {

//     const result = fetch(`../update_ativo_aluno.php`, {
//       method: "POST",
//       body: `id=${id}`,
//       headers: {
//         'Content-type': 'application/x-www-form-urlencoded'
//       }
//     })
//     .then((response) => response.json()) // retorna uma promise
//     .then((result) => {
//         Swal.fire({
//           icon: result.retorno == 'ok' ? 'success' : 'error',
//           title: result.mensagem,
//           showConfirmButton: false,
//           timer: 2000
//         })      
//     });
  
  
//   }

  //   data do modal dia 24/01/23
//   const listaAlunoID = (id) =>{
//     // lista os dados do usuário por ID, para alteração de dados
//     // aqui teria que ser implementado toda a requisicao para o backend PHP
//     // o modal terá que ser exibido dentro do result
//     // .then((result) => {o codigo abaixo ficara aqui}
//     const result = fetch(`../listaalunoid.php`, {
//       method: "POST",
//       body: `id=${id}`,
//       headers: {
//         'Content-type': 'application/x-www-form-urlencoded'
//       }
//     })
//     .then((response) => response.json()) // retorna uma promise
//     .then((result) => {
  
//       // preenche os dados dentro do form de editar usuarios
//       $('#edita-nome').val(result[0].nome)
//       $('#edita-nome_social').val(result[0].nome_social)
//       $('#edita-pai').val(result[0].pai)
//       $('#edita-mae').val(result[0].mae)
//       $('#edita-pai_af').val(result[0].pai_af)
//       $('#edita-mae_af').val(result[0].mae_af)
//       $('#edita-email').val(result[0].email)
//       $('#edita-telefone').val(result[0].telefone)
//       $('#edita-telefone2').val(result[0].telefone2)
//       $('#edita-cpf').val(result[0].cpf)
//       $('#edita-rg').val(result[0].rg)
//       $('#edita-orgao_emissor').val(result[0].orgao_emissor)
//       $('#edita-uf').val(result[0].uf)
//       $('#edita-data_nascimento').val(result[0].data_nascimento)
//       $('#edita-genero').val(result[0].genero)
//       $('#edita-cep').val(result[0].cep)
//       $('#edita-logradouro').val(result[0].logradouro)
//       $('#edita-numero').val(result[0].numero)
//       $('#edita-complemento').val(result[0].complemento)
//       $('#edita-bairro').val(result[0].bairro)
//       $('#edita-municipio').val(result[0].municipio)
//       $('#edita-estado').val(result[0].estado)
      
  
//       $('#edita-telefone').inputmask('(99) 99999-9999')
//       $('#edita-telefone2').inputmask('(99) 99999-9999')
//       $('#edita-cpf').inputmask('999.999.999-99')
//       $('#edita-rg').inputmask('99.999.999-99')
  
//       // exibe o modal apos preencher os dados para edicao
//       const modalEditar = new bootstrap.Modal('#modal-editar-usuario')
//       modalEditar.show()      
  
//     }); 
  
//   }
