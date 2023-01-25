// inicia a datatable 
$(document).ready(function () {

    // executa a função delistar alunos 
    listaraluno();
    $("")
});



// função que lista os produtos cadastrados
const listaraluno = () => {

<<<<<<< Updated upstream:backend/assets/js/listar_aluno.js
    const result = fetch('../listaraluno.php', {
=======
    const result = fetch('backend/listar_professor.php', {
>>>>>>> Stashed changes:js/listar.js
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
            $('#listar-aluno').html('')

            // função que irá montar as linhas da tabela, o map é um tipo de laço
            result.map(prod => {
                $('#listar-aluno').append(`
                <tr>
                    
                    <td>${prod.id}</td>
                    <td>${prod.nome}</td>
                    <td>${prod.email}</td>
                    <td>${prod.telefone}</td>
                    <td>${prod.data_cadastro}</td>
                    
                    <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" ${prod.ativo==1?'checked':''} onchange="updateAluno(${prod.id})"> 
                        </div>
                    </td>

                    <td>
                        <button class="btn btn-primary" type="button" onclick="listProdutoID(${prod.id}, 'Entrada')">Entrada</button>
                    </td>
                  
            `)
            })

            //  css dinamico para botão 

            // $('#tabela').DataTable({
            //     "language": {

            //         url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
            //     }
            // });
        });

}

<<<<<<< Updated upstream:backend/assets/js/listar_aluno.js
const updateAluno = (id) => {

    const result = fetch(`../update_aluno.php`, {
      method: "POST",
      body: `id=${id}`,
      headers: {
        'Content-type': 'application/x-www-form-urlencoded'
      }
    })
    .then((response) => response.json()) // retorna uma promise
    .then((result) => {
        Swal.fire({
          icon: result.retorno == 'ok' ? 'success' : 'error',
          title: result.mensagem,
          showConfirmButton: false,
          timer: 2000
        })      
    });
  
  
  }
=======
>>>>>>> Stashed changes:js/listar.js
