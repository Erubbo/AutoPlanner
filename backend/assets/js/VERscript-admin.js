// /// scripts executados ao carregar a pagina
// $(document).ready(function () {
//   $("#cpf").inputmask("999.999.999-99");
//   $("#telefone").inputmask("(99) 99999-9999");
//   $("#cep").inputmask("99999-999");

//   // executa a funcao listaTipo()
//   listaTipo();
// });


// const listaTipo = () => {
//   // funcao que lista os tipos para o cadastro
//   // dados da tabela tb_tipos
//   const result = fetch("../backend/listaTipo.php")
//     .then((response) => response.json())
//     .then((result) => {
//       // aqui sera o retorno dos dados do backend
//       // monta no select os options com os tipos da tabela

//       result.map((tipo) => {
//         $("#tipo").append(
//           `
//           <option value="${tipo.id}">${tipo.tipo}</option>
//         `
//         );
//       });
//     });
// };

// // const addUsuarios = () => {
// //   let dados = new FormData($("#form-professores")[0]);

// //   const result = fetch("../backend/addUsuarios.php", {
// //     method: "POST",
// //     body: dados,
// //   })
// //     .then((response) => response.json())
// //     .then((result) => {
// //       // aqui tratamos o retorno do backend

// //       Swal.fire({
// //         icon: result.retorno == 'ok' ? 'success' : 'error',
// //         title: result.retorno == 'ok' ? 'Sucesso!' : 'Atenção!',
// //         text: result.mensagem,
// //       });

// //       result.retorno == 'ok' ? $('#form-professores')[0].reset() : ''



// //     });
// // };



// // Funcao que exibe a aba cadastro e oculta a aba listagem
// const abaCadastro=()=>{
//   // oculta a div de listagem
//   $('#div-listagem').hide()

//   // mostra a div de cadastro
//   $('#form-professores').show()

//   $('#aba-listagem').removeClass('tab-ativo')

//   $('#aba-cadastro').addClass('tab-ativo')
// }

// // funcao que exibe a aba listagem e oculta a aba cadastro
// const abaListagem=()=>{
//   // esconde o form professores
//   $('#form-professores').hide()

//   // exibe a div de listagem
//   $('#div-listagem').show()

//   $('#aba-cadastro').removeClass('tab-ativo')
//   // add a classe 
//   $('#aba-listagem').addClass('tab-ativo')
// }

// const pesquisarUsuario = () =>{

//   // validacao de campo pesquisar vazio
//   let pesquisar = $('#pesquisar').val()

//   if(pesquisar == ''){
//     Swal.fire({
//       icon: 'error',
//       title: 'Atenção!',
//       text: 'Digite um nome ou CPF para pesquisar!',
//     });
//     return
//   }

//   dados = new FormData($('#form-listagem')[0])

//   result = fetch('../backend/pesquisarUsuario.php',{
//     method: 'POST',
//     body: dados
//   })
//   .then((response)=>response.json())
//   .then((result)=>{
//     // aqui iremos exibir os dados encontrados na pesquisa na tela
//     $('#resultado-listagem').html(`
//           <div id="tabela-listagem">
//             <table>
//                 <thead>
//                     <tr>
//                         <th>Nome</th>
//                         <th>E-mail</th>
//                         <th>Telefone</th>
//                         <th>CPF</th>
//                         <th>Ações</th>
//                     </tr>
//                 </thead>
//                 <tbody id="dados-tabela-listagem">

//                 </tbody>
//             </table>
//         </div>    
//     `)

//     if(result.length == 0){
//       $('#dados-tabela-listagem').append(`
//         <tr>
//           <td colspan="5">Nenhum usuário foi encontrado!</td>
//         </tr>
//       `)
//     }else{
//       result.map((usuario)=>{
//         $('#dados-tabela-listagem').append(`
//           <tr>
//             <td>${usuario.nome}</td>
//             <td>${usuario.email}</td>
//             <td>${usuario.telefone}</td>
//             <td>${usuario.cpf}</td>
//             <td>
//                 <button class="btn-visualizar">Visualizar</button>
//             </td>
//           </tr>    
//       `)

//       })//fecha o map

//     }//fecha o else
//   })//fecha o result

// }//fecha a funcao

// const listAluno = () => {

//     const result = fetch('../backend/listar_produtos.php', {
//         method: 'POST',
//         body: ''
//     })
//         .then((response => response.json()))
//         .then((result) => {
//             // aqui é tratado o retorno ao front

//             let datahora = moment().format('DD/MM/YY HH:mm')

//             $('#horario-atualizado').html(datahora)

//             // destroi a tabela que foi iniciada
//             $("#tabela").dataTable().fnDestroy()

//             // limpa os dados da tabela
//             $('#tabela-dados').html('')

//             // função que irá montar as linhas da ta'bela, o map é um tipo de laço
//             result.map(produto => {
//                 $('#tabela-dados').append(`
//                 <tr>
//                     <td>${produto.produto}</td>
//                     <td>${produto.marca}</td>
//                     <td>${produto.categoria}</td>
//                     <td>${moment(produto.data_cadastro).format('DD/MM/YYYY')}</td>
//                     <td>${produto.quantidade}</td>
//                     <td>${produto.fornecedor}</td>
//                     <td>
//                         <div class="form-check form-switch">
//                             <input class="form-check-input" type="checkbox" role="switch" id="ativo" ${produto.ativo == 1 ? 'checked' : ''} onchange="updatUserActive(${produto.id})">
//                         </div>
//                    </td>
                    
//                     <td>
//                         <button class="btn-cadastrar" type="button" onclick="atualizarProduto(${produto.id})">alterar</button>
//                         </td>
                       
//                         <td>
//                         <button class="btn-deletar" type="button" onclick="deleteUser(${produto.id})">deletar</button>
//                     </td>
//                 </tr>
//             `)
//             })
//         })
// }



// const listProfessor = () => {

//     const result = fetch('../backend/listar_produtos.php', {
//         method: 'POST',
//         body: ''
//     })
//         .then((response => response.json()))
//         .then((result) => {
//             // aqui é tratado o retorno ao front

//             let datahora = moment().format('DD/MM/YY HH:mm')

//             $('#horario-atualizado').html(datahora)

//             // destroi a tabela que foi iniciada
//             $("#tabela").dataTable().fnDestroy()

//             // limpa os dados da tabela
//             $('#tabela-dados').html('')

//             // função que irá montar as linhas da ta'bela, o map é um tipo de laço
//             result.map(produto => {
//                 $('#tabela-dados').append(`
//                         <tr>
//                             <td>${produto.produto}</td>
//                             <td>${produto.marca}</td>
//                             <td>${produto.categoria}</td>
//                             <td>${moment(produto.data_cadastro).format('DD/MM/YYYY')}</td>
//                             <td>${produto.quantidade}</td>
//                             <td>${produto.fornecedor}</td>
//                             <td>
//                                 <div class="form-check form-switch">
//                                     <input class="form-check-input" type="checkbox" role="switch" id="ativo" ${produto.ativo == 1 ? 'checked' : ''} onchange="updatUserActive(${produto.id})">
//                                 </div>
//                            </td>
                            
//                             <td>
//                                 <button class="btn-cadastrar" type="button" onclick="atualizarProduto(${produto.id})">alterar</button>
//                                 </td>
                               
//                                 <td>
//                                 <button class="btn-deletar" type="button" onclick="deleteUser(${produto.id})">deletar</button>
//                             </td>
//                         </tr>
//                     `)
//             })
//         })
// }
