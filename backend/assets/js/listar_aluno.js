// inicia a datatable 
$(document).ready(function () {

    // executa a função delistar alunos 
    listaraluno();
    $("")
});



// função que lista os alunos cadastrados
const listaraluno = () => {

    const result = fetch('../listaraluno.php', {
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
                        <button class="btn btn-primary" type="button" onclick="listaAlunoID(${prod.id}, 'Entrada')">Editar</button>
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

  //   data do modal dia 24/01/23
  const listaAlunoID = (id) =>{
    // lista os dados do usuário por ID, para alteração de dados
    // aqui teria que ser implementado toda a requisicao para o backend PHP
    // o modal terá que ser exibido dentro do result
    // .then((result) => {o codigo abaixo ficara aqui}
    const result = fetch(`../listaalunoid.php`, {
      method: "POST",
      body: `id=${id}`,
      headers: {
        'Content-type': 'application/x-www-form-urlencoded'
      }
    })
    .then((response) => response.json()) // retorna uma promise
    .then((result) => {
  
      // preenche os dados dentro do form de editar usuarios
      $('#edita-nome').val(result[0].nome)
      $('#edita-email').val(result[0].email)
      $('#edita-telefone').val(result[0].telefone)
      $('#edita-cpf').val(result[0].cpf)
  
      $('#edita-telefone').inputmask('(99) 99999-9999')
      $('#edita-cpf').inputmask('999.999.999-99')
  
      // exibe o modal apos preencher os dados para edicao
      const modalEditar = new bootstrap.Modal('#modal-editar-usuario')
      modalEditar.show()      
  
    }); 
  
  }
